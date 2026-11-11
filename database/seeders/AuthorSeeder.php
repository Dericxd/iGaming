<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Author::create([
            'name' => 'Gabriel Garcia Marquez',
            'birthday' => '1927-03-06',
            'country' => 'Colombia',
        ]);
        Author::create([
            'name' => 'William Shakespeare',
            'birthday' => '1564-04-26',
            'country' => 'Reino Unido',
        ]);
        Author::create([
            'name' => 'Jostein Gaarder',
            'birthday' => '1952-08-08',
            'country' => 'Noruega',
        ]);
    }
}
