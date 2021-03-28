<?php

namespace App\Providers;

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\ProviderRepositoryInterface;
use App\Repository\Eloquent\ProviderRepository; 
use App\Repository\ToDoRepositoryInterface;
use App\Repository\UserRepositoryInterface; 
use App\Repository\Eloquent\BaseRepository; 
use App\Repository\Eloquent\UserRepository; 
use App\Repository\Eloquent\ToDoRepository; 
use Illuminate\Support\ServiceProvider; 

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(EloquentRepositoryInterface::class,    BaseRepository::class);
        $this->app->bind(ProviderRepositoryInterface::class,    ProviderRepository::class);
        $this->app->bind(UserRepositoryInterface::class,        UserRepository::class);
        $this->app->bind(ToDoRepositoryInterface::class,        ToDoRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
