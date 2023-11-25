<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
  public function index()
  {
    return view('auth.register');
  }

  public function store(Request $request)
  {
    $this->validate($request, [
      'name' => ['required', 'max:30'],
      'username' => ['required', 'unique:users', 'min:3', 'max:20', 'regex:/^[a-zA-Z][a-zA-Z0-9]*$/'],
      'email' => ['required', 'unique:users', 'email', 'max:60'],
      'password' => ['required', 'confirmed', 'min:6'],
    ]);

    User::create([
      'name' => $request->name,
      'username' => Str::lower($request->username),
      'email' => $request->email,
      'password' => Hash::make($request->password),
    ]);

    auth()->attempt([
      'username' => $request->username,
      'password' => $request->password
    ]);

    return  redirect()->route('DashboardIndex');
  }
}
