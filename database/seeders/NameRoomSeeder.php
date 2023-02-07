<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NameRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('name_rooms')->insert([
            [
                'nama' => 'Ruang Pertana'
            ],
            [
                'nama' => 'Ruang Kedua'
            ],
            [
                'nama' => 'Ruang Ketiga'
            ]
        ]);
    }
}
