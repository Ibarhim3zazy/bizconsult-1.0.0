<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Setting::updateOrCreate(
            [
                'id' => 1,
            ],
            [
                'address' => '123 Street, Mit-Ghamr, EGYPT',
                'phone' => '+01145452440',
                'email' => 'ebrahim3zazy@gmail.com',
                'twitter' => 'https://twitter.com',
                'facebook' => 'https://www.facebook.com/Ibrahim3zazy',
                'youtube' => 'https://youtube.com',
                'linkedin' => 'https://www.linkedin.com/in/ibrahim-azazy/',
                'instagram' => 'https://instagram.com',
            ]
        );
    }
}
