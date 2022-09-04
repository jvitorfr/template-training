<?php

namespace App\Facades\Repositories\Auth;

use App\Models\User;
use Illuminate\Support\Facades\Facade;
use App\Interfaces\Repositories\Auth\UserRepositoryInterface;

/**
 * Class UserRepository
 * @method static User create(array $data)
 *
 * @see UserRepositoryInterface
 *
 */
class UserRepository extends Facade
{
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor()
  {
    return UserRepositoryInterface::class;
  }
}
