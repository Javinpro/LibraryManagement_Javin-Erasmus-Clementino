<?php

namespace Database\Seeders;

use App\Models\Newspaper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewspaperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Newspaper::create([
            'title' => 'IoT-based Health Monitoring System',
            'author' => 'Sarah Thompson',
            'publisher' => 'Tech Innovations Press',
            'description' => 'A system for monitoring vital signs, including heart rate, temperature, and blood pressure, with real-time alerts for critical changes.',
            'price' => 50000,
            'stock' => 100,
            'datePublished' => '2023-05-10',
            'onlineLink' => 'https://example.com/final-year-project/iot-health-monitoring',
            'catalogue_type' => 'final-year-project',
        ]);
        
        Newspaper::create([
            'title' => 'Smart Agriculture System',
            'author' => 'James Carter',
            'publisher' => 'GreenTech Publications',
            'description' => 'A project aimed at automating farm irrigation, soil moisture detection, and crop monitoring for enhanced efficiency in farming.',
            'price' => 75000,
            'stock' => 80,
            'datePublished' => '2023-08-15',
            'onlineLink' => 'https://example.com/final-year-project/smart-agriculture',
            'catalogue_type' => 'final-year-project',
        ]);
        
        Newspaper::create([
            'title' => 'Blockchain Voting System',
            'author' => 'Laura Martinez',
            'publisher' => 'SecureTech Solutions',
            'description' => 'A decentralized, blockchain-based voting platform ensuring security and transparency for electoral processes.',
            'price' => 120000,
            'stock' => 50,
            'datePublished' => '2023-07-30',
            'onlineLink' => 'https://example.com/final-year-project/blockchain-voting',
            'catalogue_type' => 'final-year-project',
        ]);
        
    }
}
