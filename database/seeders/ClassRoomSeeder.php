<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ClassRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('class_rooms')->insert([
            [
                'name_room_id' => 1,
                'nama' => '1A'
            ],
            [
                'name_room_id' => 1,
                'nama' => '2A'
            ],
            [
                'name_room_id' => 1,
                'nama' => '3A'
            ],
            [
                'name_room_id' => 1,
                'nama' => '1B'
            ],
            [
                'name_room_id' => 1,
                'nama' => '2B'
            ],
            [
                'name_room_id' => 1,
                'nama' => '3B'
            ],
            [
                'name_room_id' => 1,
                'nama' => '1C'
            ],
            [
                'name_room_id' => 1,
                'nama' => '2C'
            ],
            [
                'name_room_id' => 1,
                'nama' => '3C'
            ],
            [
                'name_room_id' => 1,
                'nama' => '1A1'
            ],
            [
                'name_room_id' => 1,
                'nama' => '1A2'
            ],
            [
                'name_room_id' => 1,
                'nama' => '1A3'
            ],
            [
                'name_room_id' => 1,
                'nama' => 'VIP A'
            ],
            [
                'name_room_id' => 1,
                'nama' => 'VIP B'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A1'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A2'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A3'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A4'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A5'
            ],
            [
                'name_room_id' => 2,
                'nama' => 'A6'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A1'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A2'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A3'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A4'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A5'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A6'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A7'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A8'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A9'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A10'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A11'
            ],
            [
                'name_room_id' => 3,
                'nama' => 'A12'
            ],
        ]);
    }
}
