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
                'description' => 'Anthropic\'s most advanced AI model with enhanced reasoning and coding capabilities. The model demonstrates breakthrough performance in complex problem-solving, mathematical analysis, and creative tasks. Its natural language understanding and generation capabilities set new standards in the AI industry.

Built on a foundation of responsible AI development, Claude 3.7 incorporates robust safety measures and ethical considerations. It excels at providing detailed, nuanced responses while maintaining accuracy and factual correctness across diverse domains.

The model\'s enhanced coding capabilities make it an invaluable tool for software development, offering contextual code suggestions, debugging assistance, and architectural insights. Its ability to understand and work with multiple programming languages makes it a versatile assistant for developers.',
                'image' => 'https://www.anthropic.com/_next/image?url=https%3A%2F%2Fwww-cdn.anthropic.com%2Fimages%2F4zrzovbb%2Fwebsite%2F4a4df6b6629f9814aec4eb9323028130f43a8d70-1920x1080.png&w=1920&q=75',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'o3',
                'description' => 'Open AI\'s Large language model optimized for scientific and technical tasks. This specialized model incorporates extensive training on scientific literature, technical documentation, and academic papers to provide accurate and detailed responses in complex technical domains.

The model features advanced capabilities in mathematical reasoning, scientific analysis, and technical problem-solving. Its architecture is specifically designed to handle complex scientific notation, mathematical formulas, and technical specifications with high precision.

Through continuous learning and optimization, o3 has developed robust capabilities in understanding and generating technical content across various scientific disciplines. The model maintains high accuracy while providing detailed explanations of complex concepts.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRr3HKi5k81IArvi5nwS681SQZYWSj_9rgDFw&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Qwen QwQ',
                'description' => 'Alibaba\'s multilingual LLM with strong performance in Asian languages. The model excels in processing and generating content in Chinese, Japanese, Korean, and various other Asian languages with high accuracy and cultural sensitivity.

Trained on a diverse dataset of Asian language content, Qwen QwQ demonstrates superior understanding of cultural nuances, idiomatic expressions, and context-specific language usage. Its architecture is optimized for handling different writing systems and character sets effectively.

The model incorporates advanced natural language processing capabilities specifically tailored for Asian languages, making it particularly effective for tasks like translation, content generation, and cross-cultural communication in Asian markets.',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS56Eb3W-PECEd57JdraZbS6LByDqOdkTqxWA&s',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Gemini 2.5',
                'description' => 'Google\'s multimodal AI model with advanced reasoning and coding capabilities. This next-generation model seamlessly integrates text, image, and code understanding to provide comprehensive solutions across different modalities.

The model builds upon Google\'s extensive research in machine learning and artificial intelligence, incorporating sophisticated algorithms for contextual understanding and response generation. Its multimodal architecture enables it to process and analyze various types of input simultaneously.

Gemini 2.5 represents a significant advancement in AI technology, offering enhanced performance in tasks ranging from natural language processing to computer vision. The model\'s ability to understand and generate both code and natural language makes it particularly valuable for software development and technical applications.',
                'image' => 'https://cdn.antaranews.com/cache/1200x800/2025/03/26/Gemini2.5.jpg',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
