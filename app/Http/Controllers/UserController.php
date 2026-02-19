<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::query()
            ->when($request->id, function ($query, $id) {
                return $query->where('id', $id);
            })
            ->when($request->name, function ($query, $name) {
                return $query->where('name', 'like', '%' . $name . '%');
            })
            ->when($request->email, function ($query, $email) {
                return $query->where('email', 'like', '%' . $email . '%');
            })
            ->get();

        return view('users', compact('users'));
    }
}
