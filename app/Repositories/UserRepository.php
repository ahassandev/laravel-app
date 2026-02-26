<?php

namespace App\Repositories;

use App\Models\User;
use App\DTO\UserFilterDTO;

class UserRepository
{
    public function filter(UserFilterDTO $dto)
    {
        $query = User::query();

        if ($dto->id) {
            $query->where('id', $dto->id);
        }

        if ($dto->name) {
            $query->where('name', 'like', '%' . $dto->name . '%');
        }

        if ($dto->email) {
            $query->where('email', 'like', '%' . $dto->email . '%');
        }

        return $query->get();
    }
}
