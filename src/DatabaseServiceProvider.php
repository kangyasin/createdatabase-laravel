<?php
namespace Kangyasin\Database;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider{

    public function boot(){

        $this->publishes([
            __DIR__.'/Console/Commands/' => app_path('Console/Commands/'),
            __DIR__.'/Console/Kernel.php' => app_path('Console/')

        ], 'config-kangyasin');
    }

    public function register(){

    }

}
