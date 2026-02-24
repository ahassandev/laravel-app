<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {

        $request->validate([
            'id' => 'nullable|integer|min:1',
            'name' => 'nullable|string',
            'email' => 'nullable|email',
        ]);


        $query = User::query();


        if ($request->filled('id')) {
            $query->where('id', $request->id);
        }

        if ($request->filled('name')) {
            $query->where('name',);
        }

        if ($request->filled('email')) {
            $query->where('email', 'like', '%' . $request->email . '%');
        }


        $users = $query->get();

        return view('users', compact('users'));
    }
}
