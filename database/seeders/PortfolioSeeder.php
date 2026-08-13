<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Project;
use App\Models\Skill;

class PortfolioSeeder extends Seeder
{
    public function run()
    {
        Skill::create([
            'title' => 'Full-Stack Web',
            'description' => 'End-to-end development using Laravel, Vue/React, and modern CSS frameworks.',
            'icon_svg' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" /></svg>',
            'color_theme' => 'cyan'
        ]);

        Skill::create([
            'title' => 'AI Integration',
            'description' => 'Integrating AI models and APIs into web applications.',
            'icon_svg' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" /></svg>',
            'color_theme' => 'purple'
        ]);

        Skill::create([
            'title' => 'UI/UX Prototyping',
            'description' => 'Designing intuitive user interfaces with Figma and translating them into code.',
            'icon_svg' => '<svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" /></svg>',
            'color_theme' => 'pink'
        ]);

        Project::create([
            'title' => 'Burger Store',
            'description' => 'A modern e-commerce platform for a gourmet burger restaurant, featuring real-time order tracking and inventory management.',
            'image' => 'images/projects/burger_store.jpg',
            'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL'],
            'github_link' => 'https://github.com/TangKongboo',
            'live_link' => 'https://burger-store.onrender.com/'
        ]);

        Project::create([
            'title' => 'Electric Store',
            'description' => 'Comprehensive inventory and point-of-sale system designed for electronics retailers to manage complex product catalogs.',
            'image' => 'images/projects/electric_store.jpg',
            'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL'],
            'github_link' => 'https://github.com/TangKongboo',
            'live_link' => '#'
        ]);

        Project::create([
            'title' => 'Indore Plants',
            'description' => 'A botanical marketplace and care guide app. Integrates an AI vision model to help users identify plants and care requirements.',
            'image' => 'images/projects/indore_plants.jpg',
            'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL'],
            'github_link' => 'https://github.com/TangKongboo',
            'live_link' => '#'
        ]);

        Project::create([
            'title' => 'Rimzone',
            'description' => 'Automotive parts aggregator with a 3D preview feature. Built a highly optimized search engine for finding compatible car parts.',
            'image' => 'images/projects/rimzone.jpg',
            'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL'],
            'github_link' => 'https://github.com/TangKongboo',
            'live_link' => '#'
        ]);

        Project::create([
            'title' => 'Digital Phone Shop',
            'description' => 'Full-featured B2C platform for mobile devices, including payment gateway integration and automated invoicing.',
            'image' => 'images/projects/digital_phone_shop.jpg',
            'tags' => ['Laravel', 'Blade', 'Tailwind CSS', 'MySQL'],
            'github_link' => 'https://github.com/TangKongboo',
            'live_link' => '#'
        ]);
    }
}
