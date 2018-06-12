<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;

/**
 * Class PasswordController
 * @package App\Http\Controllers
 */
class PasswordController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $password = Password::firstOrCreate(['user_id' => \Auth::user()->id]);
        return view('password.index', compact('password'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function edit($id)
    {
        $password = Password::findOrFail($id);
        return view('password.edit', compact('password'));
    }

    /**
     * @param $id
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $password = Password::findOrFail($id);
        $password->content = $request->input('content');
        $password->save();
        return redirect(route('password.index'));
    }
}
