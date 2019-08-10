<<<<<<< Updated upstream
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
       $this->composeNewsArchive();
       $this->composeEventsArchive();
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
     * Compose the Navigation view
     * 
     * @return void
     */
    private function composeNavigation()
    {
        view()->composer('layouts.nav',function($view){
            $view->with('nav', ['wargames'=>\App\Wargames::all()]);
        });
    }
     /**
     * Compose the News arcive
     * 
     * @return void
     */
    private function composeNewsArchive()
    {
        view()->composer('news.*',function($view){
            $view->with('archives', \App\News::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
                 ->groupby('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get());
        });
    }
    private function composeEventsArchive()
    {
        view()->composer('events.*',function($view){
            $view->with('archives', \App\Events::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
                 ->groupby('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get());
        });
    }
}
=======
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
       $this->composeNewsArchive();
       $this->composeEventsArchive();
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
     * Compose the Navigation view
     * 
     * @return void
     */
    private function composeNavigation()
    {
        view()->composer('layouts.nav',function($view){
            $view->with('nav', ['wargames'=>\App\Wargames::all()]);
        });
    }
     /**
     * Compose the News arcive
     * 
     * @return void
     */
    private function composeNewsArchive()
    {
        view()->composer('news.*',function($view){
            $view->with('archives', \App\News::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published   ')
                 ->groupby('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get());
        });
    }
    private function composeEventsArchive()
    {
        view()->composer('events.*',function($view){
            $view->with('archives', \App\Events::selectRaw('year(created_at) year , monthname(created_at) month, count(*) published')
                 ->groupby('year','month')
                 ->orderByRaw('min(created_at) desc')
                 ->get());
        });
    }
}
>>>>>>> Stashed changes
