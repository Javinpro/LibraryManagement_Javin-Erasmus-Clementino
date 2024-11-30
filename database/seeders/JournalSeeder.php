<?php

namespace Database\Seeders;

use App\Models\Journal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class JournalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Journal::create([
            'title' => 'A Study on Machine Learning Techniques for Cancer Detection',
            'author' => 'Sarah Johnson',
            'publisher' => 'University of California',
            'description' => 'This research explores the use of machine learning algorithms to improve early cancer detection and diagnosis accuracy.',
            'price' => 150000,
            'stock' => 10,
            'datePublished' => '2023-05-15',
            'volume' => 1,
            'series' => 1,
            'number' => 1,
            'onlineLink' => 'https://uc.edu/projects/cancer-detection',
        ]);
        
        Journal::create([
            'title' => 'Design and Implementation of a Smart Home Automation System',
            'author' => 'Ahmed Khan',
            'publisher' => 'National University of Singapore',
            'description' => 'This project develops a smart home system integrating IoT devices for automation, security, and energy management.',
            'price' => 200000,
            'stock' => 20,
            'datePublished' => '2022-06-20',
            'volume' => 1,
            'series' => 2,
            'number' => 3,
            'onlineLink' => 'https://nus.edu.sg/projects/smart-home',
        ]);
        
        Journal::create([
            'title' => 'Development of a Sustainable Waste Management System',
            'author' => 'Emily Rodriguez',
            'publisher' => 'University of Melbourne',
            'description' => 'A sustainable waste management system aimed at reducing landfill waste through innovative recycling techniques.',
            'price' => 120000,
            'stock' => 12,
            'datePublished' => '2021-12-10',
            'volume' => 1,
            'series' => 3,
            'number' => 5,
            'onlineLink' => 'https://unimelb.edu.au/projects/waste-management',
        ]);
        
    }
}
