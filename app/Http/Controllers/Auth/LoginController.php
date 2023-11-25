<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
  public function index()
  {
    return view('Auth.login');
  }

  public function store(Request $request)
  {
    $this->validate($request, [

      'username' => ['required', 'regex:/^[a-zA-Z][a-zA-Z0-9]*$/'],
      'password' => ['required']
    ]);

    if (!auth()->attempt($request->only('username', 'password'), $request->remember)) {
      return back()->with('mensaje', 'Credenciales Incorrectas');
    }
    return redirect()->route('DashboardIndex');
  }
}
