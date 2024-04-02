<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aluno')->insert([
            'Name'=>'Maria Eduarda',
            'DateOfBirth'=>'2003/08/01',
            'Email'=>'maria@gmail.com',
            'RegistrationNumber'=>'001',
            'ClassCourse'=>'TADS'
        ]);
    }
}
