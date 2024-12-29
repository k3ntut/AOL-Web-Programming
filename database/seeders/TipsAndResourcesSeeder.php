<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipsAndResourcesSeeder extends Seeder
{
    public function run(): void
    {
        // Define the image file path
        $imagePath = 'imgs/image 14.png'; // Make sure the image exists in public/images folder

        // Insert data into the database with image path
        DB::table('tips_and_resources')->insert([
            'title' => 'Understanding Eco and Carbon Footprint: A Step Toward Sustainability',
            'content' => 'In the face of a growing environmental crisis, the terms “eco footprint” and “carbon footprint” have become increasingly relevant...',
            'image' => $imagePath,  // Store the image path in the database
        ]);
    }
}
