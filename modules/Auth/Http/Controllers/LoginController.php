<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Auth\Http\Requests\LoginFormRequest;

class LoginController extends Controller
{
   
    public function index()
    {
        return view('auth::login');
    }

    public function create()
    {
        return view('auth::create');
    }

    public function store(LoginFormRequest $request)
    {
        if (! auth()->attempt($request->only('email', 'password'), $request->boolean('remember'))) {
        return redirect()
            ->route('login')
            ->withInput([
                'email' => $request->email,
            ])
            ->withErrors([
                'email' => __('auth.failed'),
            ]);
        }

        return redirect()->route('backend.dashboard');
    
    }

    public function show($id)
    {
        return view('auth::show');
    }

    public function edit($id)
    {
        return view('auth::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
