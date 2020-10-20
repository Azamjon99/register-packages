<?php
namespace Azamjon99\Register;
use Illuminate\Support\ServiceProvider;
use App\Providers\RouteServiceProvider;

class RegisterServiceProvider extends ServiceProvider
{
public function boot(){
     $this->loadRoutesFrom(__DIR__.'/routes/web.php');
     $this->loadViewsFrom(__DIR__.'/views', 'register');
     $this->loadMigrationsFrom(__DIR__.'/database/migrations');
    $this->mergeConfigFrom(
        __DIR__.'/config/contact.php', 'contact'
    );
    
    $this->publishes([
        __DIR__.'/config/contact.php' => config_path('contact.php'),
    ]);
}

public function register(){
    
}
}