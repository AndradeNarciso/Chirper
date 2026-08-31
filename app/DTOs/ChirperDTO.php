<?php

namespace App\DTOs;

use Carbon\Carbon;

class ChirperDTO
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        public string $author,
        public string $message,
        public Carbon $time
    ) {
        //
    }
}
