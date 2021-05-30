<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
     * Author: Thinh
     * @return void
     */
    public function boot()
    {
        // Index Lengths & MySQL / MariaDB: The max length of the columns
        // in the hybrid index can only be 125 characters due to using Spatie package
        // (Prerequisites)

        Schema::defaultStringLength(125);
    }
}
