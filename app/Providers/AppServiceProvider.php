<?php

namespace App\Providers;
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
        //Schema::defaultStringLength(191); //UTILIZAR CASO ACONTEÇA 
        //ESSE ERROR  (error illuminate database queryexception)
    }
}
