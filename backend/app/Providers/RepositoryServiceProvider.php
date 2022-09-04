<?php

namespace App\Providers;

use App\Interfaces\Repositories\Owner\OwnerRepositoryInterface;
use App\Interfaces\Repositories\Auth\UserRepositoryInterface;
use App\Repositories\Owner\OwnerRepository;
use App\Repositories\Auth\UserRepository;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider  implements DeferrableProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(OwnerRepositoryInterface::class, OwnerRepository::class);
        $this->app->bind(UserRepositoryInterface::class, UserRepository::class);
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

  /**
   * @return array
   */
  public function provides()
    {
      return [UserRepositoryInterface::class];
    }
}
