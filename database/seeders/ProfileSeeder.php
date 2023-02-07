<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profiles')->insert([
            'nama' => 'Rumah Sakit Nurul Qalbi',
            'berdiri' => '2010',
            'pendiri' => 'Hj. Muhammad Shalih'
        ]);
    }
}
