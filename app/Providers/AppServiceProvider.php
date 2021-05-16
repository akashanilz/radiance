<?php

namespace App\Providers;

use App\Models\Module;
use Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Schema::defaultStringLength(191);
        Blade::if('module', function ($name) {
            $module = Module::where('name', $name)->first();
            if ($module) {
                return $module->is_active;
            }
        });
    }
}
