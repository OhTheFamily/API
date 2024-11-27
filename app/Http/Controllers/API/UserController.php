<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class UserController
{
    /**
     * Get all the user.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return User::all();
    }

    /**
     * Get the user by its ID or return null.
     *
     * @param int $id The user ID.
     * @return User|Collection|Model|null
     */
    public function show(int $id): User|Collection|Model|null
    {
        return User::query()->findOrFail($id);
    }

    /**
     * Get the user and his puzzles by its ID or return null.
     *
     * @param int $id The user ID.
     * @return User|Collection|Model|null
     */
    public function showWithPuzzles(int $id): Model|Collection|User|null
    {
        return User::with('puzzles')->find($id);
    }
}
