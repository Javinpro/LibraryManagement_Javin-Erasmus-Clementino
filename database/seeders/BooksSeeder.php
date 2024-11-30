<?php

namespace Database\Seeders;

use App\Models\Books;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Books::create([
            'title' => 'The Second World War',
            'author' => 'Antony Beevor',
            'publisher' => 'Little, Brown and Company',
            'description' => 'This book provides a comprehensive and gripping history of World War II, covering the political, military, and human aspects of the conflict from the invasion of Poland in 1939 to the end of the war in 1945. Beevor offers a panoramic view of the global impact of the war, highlighting key events and battles from multiple perspectives.',
            'datePublished' => '2012-10-01',
            'genre' => 'Nonfiction',
            'price' => 500000,
            'stock' => 5,
            'onlineLink' => 'https://www.amazon.com/Second-World-War-Antony-Beevor/dp/0316023744'
        ]);
        
        Books::create([
            'title' => 'The Catcher in the Rye',
            'author' => 'J.D. Salinger',
            'publisher' => 'Little, Brown and Company',
            'description' => 'This classic novel tells the story of Holden Caulfield, a disenchanted teenager who has been expelled from multiple prep schools and struggles with depression and alienation. Through his journey in New York, he reflects on his loss of innocence and the phoniness of the adult world.',
            'datePublished' => '1951-07-16',
            'genre' => 'Fiction',
            'price' => 150000,
            'stock' => 10,
            'onlineLink' => 'https://www.amazon.com/Catcher-Rye-J-D-Salinger/dp/0316769487'
        ]);
        
        Books::create([
            'title' => 'Educated',
            'author' => 'Tara Westover',
            'publisher' => 'Random House',
            'description' => 'Educated is a memoir by Tara Westover about her escape from a strict and abusive family in rural Idaho. Through sheer determination, she escapes her upbringing and ultimately earns a PhD from the University of Cambridge. The book explores themes of identity, resilience, and the power of education.',
            'datePublished' => '2018-02-20',
            'genre' => 'Biography',
            'price' => 250000,
            'stock' => 8,
            'onlineLink' => 'https://www.amazon.com/Educated-Memoir-Tara-Westover/dp/0399590501'
        ]);
        
            }
}
