<?php

namespace WebArindam\Login;

use Illuminate\Support\ServiceProvider;

class LoginServiceProvider extends ServiceProvider
{
  /**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
    include __DIR__.'/routes.php';
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
    $this->app->make('WebArindam\Login\LoginController');
    $this->loadViewsFrom(__DIR__.'/views', 'login');
  }
}
