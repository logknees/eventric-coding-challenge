<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\VenueRepositoryInterface;
use App\Repositories\VenueRepository;


class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(VenueRepositoryInterface::class, VenueRepository::class);
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
