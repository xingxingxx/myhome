<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function index()
    {
        $password = Password::firstOrCreate(['user_id' => \Auth::user()->id]);
        return view('password.index', compact('password'));
    }

    public function edit($id)
    {
        $password = Password::findOrFail($id);
        return view('password.edit', compact('password'));
    }

    public function update($id, Request $request)
    {
        $password = Password::findOrFail($id);
        $password->content = $request->input('content');
        $password->save();
        return redirect(route('password.index'));
    }
}
