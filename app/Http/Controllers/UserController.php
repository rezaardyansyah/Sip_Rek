<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function store(Request $request)
    {
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email|unique:users',
        'password' => 'required|string|min:8',
        'role_id' => 'required|exists:roles,id',
        'divisi_id' => 'required|exists:divisi,id',
        'position_id' => 'required|exists:positions,id',
        ]);

    User::create([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'password' => bcrypt($validated['password']),
        'role_id' => $validated['role_id'],
        'divisi_id' => $validated['divisi_id'],
        'position_id' => $validated['position_id'],
        ]);
    }
}
