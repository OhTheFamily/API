<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Puzzle extends Model
{
    use HasFactory;

    public $timestamps = false;

    /**
     * Get the user associated with the puzzle.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
