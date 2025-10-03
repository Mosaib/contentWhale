<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('testimonials')->insert([
            [
                'text' => 'Content Whale transformed our website copy and blog strategy. Within 3 months, we saw a 40% increase in organic traffic and better engagement across all pages.',
                'author' => 'Anjali Mehta',
                'date' => '2023-05-14',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'We hired Content Whale for SEO blogs and product descriptions. Their team delivered high-quality, keyword-rich content that perfectly aligned with our brand voice.',
                'author' => 'Rahul Sharma',
                'date' => '2023-08-02',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'Professional, reliable, and creative – Content Whale helped us publish consistent LinkedIn articles that positioned our CEO as an industry thought leader.',
                'author' => 'Sneha Kapoor',
                'date' => '2024-01-18',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'We needed fast turnaround content for a product launch. Content Whale delivered 20+ pages of crisp, compelling copy in less than a week. Outstanding work!',
                'author' => 'Michael Rodriguez.',
                'date' => '2024-03-12',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'text' => 'Their blogs not only improved our rankings but also drove more leads. The storytelling style makes even complex topics easy to understand for our audience.',
                'author' => 'Priya Desai',
                'date' => '2024-06-25',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
