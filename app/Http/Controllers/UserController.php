<?php

namespace App\Http\Controllers;

use App\DTO\UserFilterDTO;
use App\Repositories\UserRepository;

class UserController extends Controller
{
    public function index(
        UserFilterDTO $dto,
        UserRepository $repository
    ) {
        $users = $repository->filter($dto);

        return view('users', compact('users'));
    }
}
