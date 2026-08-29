<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Chirp extends Model
{
    protected $fillable = ['message'];

    private function user():BelongsTo{
        return $this->BelongsTo(User::class);
    }
}
