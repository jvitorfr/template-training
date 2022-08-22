<?php


namespace App\Interfaces\Repositories\Owner;


use Illuminate\Database\Eloquent\Collection;

interface OwnerRepositoryInterface
{

    public function findById(int $id): Collection;
    public function findAll(): Collection;
}
