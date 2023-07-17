<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call (UsersTableSeeder::class);
        $this->call (BooksTableSeeder::class);
        $this->call (CategoriesTableSeeder::class);
        $this->call (ProvincesTableSeeder::class);
        $this->call (CitiesTableSeeder::class);
<<<<<<< HEAD
<<<<<<< HEAD
        //$this->call (BookCategory::class);
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
=======
>>>>>>> 46c6ac302a85b974e96c7182a3a5fbc1404eb07c
    }
}
