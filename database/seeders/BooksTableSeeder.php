<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        $param = [
            'title' => '鹿せんべいの歴史',
            'author' => '奈良　鹿子',
            'created_at' => now(),
            'updated_at' => now(),
        ];
        DB::table('books')->insert($param);
    }
}
