<?php

namespace App\Providers;

use App\Repository\EloquentRepositoryInterface; 
use App\Repository\ProviderRepositoryInterface; 
use App\Repository\Eloquent\ProviderRepository; 
use App\Repository\Eloquent\BaseRepository; 
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
        // dd(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProviderRepositoryInterface::class, ProviderRepository::class);
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
