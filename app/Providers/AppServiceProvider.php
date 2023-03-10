<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

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
        // 9－3
        \URL::forceScheme('https');
        
        \URL::forceScheme('https');
  $this->app['request']->server->set('HTTPS','on');
  
//   8－2　pegination表示
     Paginator::useBootstrap();
    }
    
    
}
