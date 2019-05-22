<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Antanas',
            'email' => 'pu@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'pirmas',
            'tipa' => 1,
            'phone' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'Gediminas',
            'email' => 'gediminas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'antras',
            'tipa' => 1,
            'phone' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'Laimonas',
            'email' => 'laimonas2@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'trecias',
            'tipa' => 1,
            'phone' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'Gintaras',
            'email' => 'gintaras@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'ketvirtas',
            'tipa' => 1,
            'phone' => '123'
        ]);

        DB::table('users')->insert([
            'name' => 'Tadas',
            'email' => 'tadas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'penktas',
            'tipa' => 1,
            'phone' => '123'
        ]);


        
        DB::table('kursais')->insert([
            'name' => 'PHP'
        ]);

        DB::table('kursais')->insert([
            'name' => 'Java'
        ]);

        DB::table('kursais')->insert([
            'name' => 'Python'
        ]);

        DB::table('kursais')->insert([
            'name' => 'JavaScript'
        ]);

        DB::table('kursais')->insert([
            'name' => 'MATLAB'
        ]);

        DB::table('kursais')->insert([
            'name' => 'C/C++'
        ]);

        DB::table('kursais')->insert([
            'name' => 'C#'
        ]);



        // DB::table('grupes')->insert([
        //     'name' => 'C# 2008-01-12:prasidėjo 2008-01-12 pabaiga: 2008-06-13'
        // ]);

        // DB::table('grupes')->insert([
        //     'name' => 'MATLAB 2009-01-12:prasidėjo 2009-01-12 pabaiga: 2009-06-13'
        // ]);
    }
}
