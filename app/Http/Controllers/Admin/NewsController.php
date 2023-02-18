<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    public function index()
    {
        $newses = News::orderBy('id', 'desc')->get();

        return view('dashboard.news.news', compact('newses'),
        ['title' => 'News']);
    }

    public function create()
    {
        return view('dashboard.news.create',
        ['title' => 'News']);
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'title' => 'required',
            'thumbnail' => 'required|image|max:2048|mimes:jpeg,jpg,png',
            'news' => 'required'
        ]);

        $extenstion = $request->file('thumbnail')->getClientOriginalExtension();
        $thumbnailName = 'thumbnail'. '-' .rand(). '.' .$extenstion;
        $path = $request->file('thumbnail')->storeAs('thumbnails', $thumbnailName, 'public');

        $news = News::create([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $thumbnailName,
            'news' => $request->news
        ]);

        return redirect()->route('news.index')->with('status', 'Data Berita Berhasil Di Tambahkan');
    }

    public function show($id)
    {
        $news = News::find($id);

        return view('dashboard.news.detail', compact('news'),
        ['title' => 'News']);
    }

    public function edit($id)
    {
        $news = News::find($id);

        return view('dashboard.news.edit', compact('news'),
        ['title' => 'News']);
    }

    public function update(Request $request, $id)
    {
        $validate = $request->validate([
            'title' => 'required',
            'thumbnail' => 'nullable|image|max:2048|mimes:jpg,jpeg,png',
            'news' => 'required'
        ]);

        $news = News::find($id);

        if($request->file('thumbnail')) {
            $thumbnailOld = 'storage/thumbnails/'. $news->thumbnail;
            if(File::exists($thumbnailOld)) {
                File::delete($thumbnailOld);
                
                $extenstion = $request->file('thumbnail')->getClientOriginalExtension();
                $thumbnailName = 'thumbnail'. '-' .rand(). '.' .$extenstion;
                $path = $request->file('thumbnail')->storeAs('thumbnails', $thumbnailName, 'public');
            }
        } else {
            $thumbnailName = $news->thumbnail;
        }

        $news = News::find($id)->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'thumbnail' => $thumbnailName,
            'news' => $request->news
        ]);

        return redirect()->route('news.index')->with('status', 'Data Berita Berhasil Di Update');
    }

    public function destroy($id)
    {
        $news = News::find($id);
        $news->delete();
        File::delete('storage/thumbnails/' .$news->thumbnail);

        return redirect()->route('news.index')->with('status', 'Data Berita Berhasil Di Hapus');
    }
}
