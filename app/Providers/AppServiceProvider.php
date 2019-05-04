<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Wargames;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //all wargames
        $wargames = Wargames::all();
        $nav = [
            'wargames'=>$wargames
          ];
         view()->share('nav', $nav);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
