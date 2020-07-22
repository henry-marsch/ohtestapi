<?php
namespace App\Contracts\Repositories;

use Illuminate\Support\Collection;

interface BookRepositoryInterface extends EloquentRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
