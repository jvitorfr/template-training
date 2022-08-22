<?php

namespace App\Repositories\Owner;

use App\Interfaces\Repositories\Owner\OwnerRepositoryInterface;
use Illuminate\Database\Eloquent\Collection;
use App\Models\Owner;

class OwnerRepository implements OwnerRepositoryInterface
{

    /**
     * @param int $id
     * @return Collection
     */
    public function findById(int $id): Collection
    {
        return Owner::findOrFail($id);
    }

    /**
     * @return Collection
     */
    public function findAll(): Collection
    {
        return Owner::findAll();
    }
}
