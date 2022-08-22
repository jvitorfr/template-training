<?php

namespace App\Providers;

use App\Interfaces\Repositories\Owner\OwnerRepositoryInterface;
use App\Repositories\Owner\OwnerRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }


    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
