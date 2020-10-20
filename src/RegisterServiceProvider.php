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
   
    
    $this->publishes([
        __DIR__.'/config/register.php' => config_path('register.php'),
    ]);
}

public function register(){
    
}
}