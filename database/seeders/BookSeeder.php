<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Cien años de soledad',
            'author_id' => 1,
            'description' => 'Historia de siete generaciones de la familia Buendía y el ascenso y caída del mítico pueblo de Macondo',
            'publication_year' => 1967,
            'category_id' => 1,
        ]);
        Book::create([
            'title' => 'Hamlet',
            'author_id' => 2,
            'description' => 'Es la tragedia de un príncipe de Dinamarca que busca vengar el asesinato de su padre, perpetrado por su tío Claudio, quien usurpó el trono y se casó con la reina viuda',
            'publication_year' => 1603,
            'category_id' => 2,
        ]);
        Book::create([
            'title' => 'El mundo de Sofía',
            'author_id' => 3,
            'description' => 'Es una novela del autor noruego Jostein Gaarder que funciona como una guía didáctica de la historia de la filosofía occidental a través de una trama de ficción.',
            'publication_year' => 1991,
            'category_id' => 3,
        ]);
    }
}
