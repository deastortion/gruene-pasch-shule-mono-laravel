<?php

namespace App\Providers;

use App\Repositories\EventRepository;
use App\Repositories\Interfaces\EventRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EventRepositoryInterface::class, EventRepository::class);
    }
}
