<?php

namespace App\Providers;


use App\Models\website_info;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
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
        $website_info = website_info::find(1);
        View::share( ['website_info' =>  $website_info]); 
        Paginator::useTailwind();
    }
}
