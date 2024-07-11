<?php

namespace Database\Seeders;

use App\Models\Service;
use Database\Factories\ServiceFactory;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::factory(3)->create();
    }
}
