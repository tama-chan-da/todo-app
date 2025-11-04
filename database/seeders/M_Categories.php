<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class M_Categories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        DB::table('m_categories')->insert([
            [
                'name' => '平日',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '休日',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => '祝日',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
