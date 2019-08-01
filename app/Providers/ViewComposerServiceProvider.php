<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->composeNavigation();
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Composer the Navigation view
     * 
     * @return void
     */
    private function composeNavigation()
    {
        view()->composer('layouts.nav',function($view){
            $view->with('nav', ['wargames'=>\App\Wargames::all()]);
        });
    }
}
