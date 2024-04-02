<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('post')->insert([
            'PostTitle'=>'Girassóis',
            'Author'=>'Maria',
            'PublicationDate'=>'2024/03/13',
            'Content'=>'Girassóis vermelhos e amarelos',
            'Tags'=>'Flores'
        ]);
    }
}
