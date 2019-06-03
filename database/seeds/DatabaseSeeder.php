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
            'surname' => 'Grumblinas',
            'tipa' => 1,
            'phone' => '123 23 345'
        ]);

        DB::table('users')->insert([
            'name' => 'Gediminas',
            'email' => 'gediminas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Grigaitis',
            'tipa' => 1,
            'phone' => '123 56 776'
        ]);

        DB::table('users')->insert([
            'name' => 'Laimonas',
            'email' => 'laimonas2@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Rakaitis',
            'tipa' => 1,
            'phone' => '123 76 987'
        ]);

        DB::table('users')->insert([
            'name' => 'Gintaras',
            'email' => 'gintaras@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Dudenas',
            'tipa' => 1,
            'phone' => '123 76 321'
        ]);

        DB::table('users')->insert([
            'name' => 'Tadas',
            'email' => 'tadas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Trumpickas',
            'tipa' => 1,
            'phone' => '123 87 009'
        ]);



        DB::table('users')->insert([
            'name' => 'Tomas',
            'email' => 'tomas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Triaukaitis',
            'tipa' => 2,
            'phone' => '263 87 209'
        ]);

        DB::table('users')->insert([
            'name' => 'Kazimierijus',
            'email' => 'tundrys@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Tundrys',
            'tipa' => 2,
            'phone' => '876 56 009'
        ]);

        DB::table('users')->insert([
            'name' => 'Bladas',
            'email' => 'srukas@gmail.com',
            'password' => Hash::make('123'),
            'surname' => 'Srukas',
            'tipa' => 2,
            'phone' => '373 87 329'
        ]);



        
        DB::table('kursais')->insert([
            'name' => 'TINKLALAPIŲ KŪRIMAS'
        ]);

        DB::table('kursais')->insert([
            'name' => 'JAVA'
        ]);

        DB::table('kursais')->insert([
            'name' => 'ANDROID'
        ]);

        DB::table('kursais')->insert([
            'name' => 'OBJEKTINIS PROGRAMAVIMAS'
        ]);

        DB::table('kursais')->insert([
            'name' => 'GRAFINIS DIZAINAS'
        ]);

        DB::table('kursais')->insert([
            'name' => 'DUOMENŲ ANALITIKA'
        ]);

        DB::table('kursais')->insert([
            'name' => 'TESTAVIMAS'
        ]);

        DB::table('kursais')->insert([
            'name' => 'BIG DATA kursai'
        ]);





        DB::table('grupes')->insert([
            'name' => 'C# 05'
        ]);

        DB::table('grupes')->insert([
            'name' => 'MATLAB 02'
        ]);





        DB::table('paskaitos')->insert([
            'name' => 'PHP'
        ]);

        DB::table('paskaitos')->insert([
            'name' => 'TESTAVIMAS'
        ]);


    }
}
