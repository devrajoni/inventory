<?php

namespace Modules\Auth\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LogoutController extends Controller
{

    public function destroy()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
