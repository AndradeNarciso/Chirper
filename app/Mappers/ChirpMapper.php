<?php

namespace App\Mappers;

use App\DTOs\ChirperDTO;
use App\Models\Chirp;


class ChirpMapper
{
    /**
     * Create a new class instance.
     */
 public function toDTO(Chirp $chirp): ChirperDTO{
    return new ChirperDTO(
        author: $chirp->user->name,
        message:$chirp->message,
        time:$chirp->updated_at   );

 }
}
