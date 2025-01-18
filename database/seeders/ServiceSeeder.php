<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('services')->insert([
            ['title' => 'IELTS Tutoring', 'description' => 'Achieve your goal today with us!'],
            ['title' => 'Life Coaching', 'description' => 'Self-discovery and transformation await!'],
        ]);
    }

}
