<?php

namespace App\DTO;

use Spatie\LaravelData\Data;
use Spatie\LaravelData\Attributes\Validation\Rule;

class UserFilterDTO extends Data
{
    public function __construct(

        #[Rule('nullable|integer|min:1')]
        public ?int $id = null,

        #[Rule('nullable|string|max:255|min:3')]
        public ?string $name = null,

        #[Rule('nullable|email|max:255')]
        public ?string $email = null,

    ) {}
}
