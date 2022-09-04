<?php

namespace App\Repositories\Auth;

use App\Interfaces\Repositories\Auth\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @inheritdoc
     */
    public function create(array $user): User
    {
      return User::create($user);
    }
}
