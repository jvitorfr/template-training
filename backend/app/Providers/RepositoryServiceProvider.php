<?php

namespace App\Providers;

use App\Interfaces\Repositories\Owner\OwnerRepositoryInterface;
use App\Repositories\Owner\OwnerRepository;
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
        $this->app->bind(OwnerRepositoryInterface::class, OwnerRepository::class);
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
