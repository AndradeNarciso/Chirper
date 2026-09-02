<?php

namespace App\Mappers;

use App\DTOs\ChirperDTO;
use App\Models\Chirp;


class ChirpMapper
{
    /**
     * Create a new class instance.
     */
    public function toDTO(Chirp $chirp): ChirperDTO
    {
        return new ChirperDTO(
            author: $chirp->user ? $chirp->user->name : 'unknown',
            message: $chirp->message,
            time: $chirp->updated_at,
            id:$chirp->id
        );
    }
}
