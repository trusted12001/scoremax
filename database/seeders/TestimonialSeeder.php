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
            ['name' => 'Abdussalam', 'feedback' => 'Thank you for your support!'],
            ['name' => 'Kemi', 'feedback' => 'You are indeed qualify in all ramification!'],
        ]);
    }
}
