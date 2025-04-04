<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        Promotion::insert([
            [
            'title' => 'Claude 3.7',
            'description' => 'Anthropic\'s most advanced AI model with enhanced reasoning and coding capabilities.',
            'image' => 'https://www.anthropic.com/_next/image?url=https%3A%2F%2Fwww-cdn.anthropic.com%2Fimages%2F4zrzovbb%2Fwebsite%2F4a4df6b6629f9814aec4eb9323028130f43a8d70-1920x1080.png&w=1920&q=75',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => 'O3 Language Model',
            'description' => 'Open AI\'s Large language model optimized for scientific and technical tasks.',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr3HKi5k81IArvi5nwS681SQZYWSj_9rgDFw&s',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => 'Qwen QwQ',
            'description' => 'Alibaba\'s multilingual LLM with strong performance in Asian languages.',
            'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS56Eb3W-PECEd57JdraZbS6LByDqOdkTqxWA&s',
            'created_at' => now(),
            'updated_at' => now(),
            ],
            [
            'title' => 'Gemini 2.5',
            'description' => 'Google\'s multimodal AI model with advanced reasoning and coding capabilities.',
            'image' => 'https://cdn.antaranews.com/cache/1200x800/2025/03/26/Gemini2.5.jpg',
            'created_at' => now(),
            'updated_at' => now(),
            ]
        ]);
    }
}
