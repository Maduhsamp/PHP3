<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BibliotecaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biblioteca')->insert([
            'Title'=>'Poeira em Alto Mar',
            'AuthorPublisher'=>'Maria Eduarda',
            'PublicationDate'=>'2024/03/13',
            'GenreType'=>'Fantasia',
            'AvailableCopies'=>'7000'
        ]);
    }
}
