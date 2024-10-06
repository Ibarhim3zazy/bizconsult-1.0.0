<?php

namespace App\Providers;

use App\Models\Setting;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class SettingServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('settings') && Setting::exists()) {
            $settings = Setting::findOrFail(1);
            view()->share('settings', $settings);
        } else {
            Log::warning('Settings table not found. Please run php artisan db:seed --class=SettingTableSeeder');
        }
    }
}
