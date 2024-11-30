<?php

namespace Database\Seeders;

use App\Models\FinalYearProject;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalYearProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FinalYearProject::create([
            'title' => 'Design and Implementation of a Smart Traffic Management System',
            'author' => 'Alice Green',
            'publisher' => 'University of Oxford',
            'description' => 'This project aims to design and implement a smart traffic management system using IoT devices to reduce traffic congestion and enhance road safety through real-time monitoring.',
            'stock' => 5,
            'datePublished' => '2023-05-20',
            'onlineLink' => 'https://example.com/project/smart-traffic-system',
            'catalogue_type' => 'final year project',
        ]);
        
        FinalYearProject::create([
            'title' => 'Development of a Mobile App for Personal Finance Management',
            'author' => 'Mark Taylor',
            'publisher' => 'Stanford University',
            'description' => 'This project focuses on the development of a mobile application that helps users manage their personal finances, track expenses, and set budget goals using intuitive charts and financial reports.',
            'stock' => 5,
            'datePublished' => '2023-08-12',
            'onlineLink' => 'https://example.com/project/finance-app',
            'catalogue_type' => 'final year project',
        ]);
        

        FinalYearProject::create([
            'title' => 'Blockchain-Based Healthcare Data Security System',
            'author' => 'Jennifer Lopez',
            'publisher' => 'Harvard University',
            'description' => 'This project proposes a blockchain-based solution for securing sensitive healthcare data, allowing for safe sharing of medical records while maintaining privacy and compliance with healthcare regulations.',
            'stock' => 5,
            'datePublished' => '2023-03-10',
            'onlineLink' => 'https://example.com/project/healthcare-blockchain',
            'catalogue_type' => 'final year project',
        ]);
        
    }
}
