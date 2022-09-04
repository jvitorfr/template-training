<?php


namespace App\Interfaces\Repositories\Auth;

use App\Models\User;


interface UserRepositoryInterface
{

  /**
   * Cria e retorna um usuário
   *
   * @param array $user
   * @return User
   */
    public function create(array $user): User;
}
