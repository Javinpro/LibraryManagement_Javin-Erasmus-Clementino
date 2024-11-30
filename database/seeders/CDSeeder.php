<?php

namespace Database\Seeders;

use App\Models\CD;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CDSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CD::create([
            'title' => 'Abbey Road',
            'author' => 'The Beatles',
            'publisher' => 'Apple Records',
            'description' => 'Abbey Road is the eleventh studio album by English rock band The Beatles, released in 1969. Featuring iconic tracks like "Come Together" and "Something".',
            'price' => 250000,
            'stock' => 5,
            'datePublished' => '1969-09-26',
            'genre' => 'biography',  // Mengubah genre menjadi 'biography'
            'onlineLink' => 'https://example.com/abbey-road',
            'catalogue_type' => 'CD',
        ]);
        
        CD::create([
            'title' => 'Thriller',
            'author' => 'Michael Jackson',
            'publisher' => 'Epic Records',
            'description' => 'Thriller is the sixth studio album by Michael Jackson, released in 1982. Featuring legendary tracks like "Billie Jean" and "Beat It".',
            'price' => 300000,
            'stock' => 7,
            'datePublished' => '1982-11-30',
            'genre' => 'biography',  // Mengubah genre menjadi 'biography'
            'onlineLink' => 'https://example.com/thriller',
            'catalogue_type' => 'CD',
        ]);
        
        CD::create([
            'title' => 'Back in Black',
            'author' => 'AC/DC',
            'publisher' => 'Atlantic Records',
            'description' => 'Back in Black is the seventh studio album by Australian rock band AC/DC, released in 1980. It includes the famous title track and "You Shook Me All Night Long".',
            'price' => 220000,
            'stock' => 8,
            'datePublished' => '1980-07-25',
            'genre' => 'biography',  // Mengubah genre menjadi 'biography'
            'onlineLink' => 'https://example.com/back-in-black',
            'catalogue_type' => 'CD',
        ]);
        
            }
}
