<?php

namespace App\Http\Controllers\API;

use App\Models\Puzzle;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class PuzzleController
{
    /**
     * Get all the user.
     *
     * @return Collection
     */
    public function index(): Collection
    {
        return Puzzle::with('user')->get();
    }

    /**
     * Get the puzzle by its id.
     *
     * @param int $id The user ID.
     * @return Puzzle|Collection|Model|null
     */
    public function show(int $id): Model|Collection|Puzzle|null
    {
        return Puzzle::with('user')->findOrFail($id);
    }
}
