<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class PasswordChangeController extends Controller
{
   
    public function update(Request $request, $id)
    {
        $request->validate([
            'current_password' => [
                'required',
                    function($attribute, $value, $fails){
                    if(! \Hash::check($value, auth()->user()->password)){
                        $fails(__('auth.password'));
                    }
                },
            ],
            'password' => [
                'required',
                'confirmed',
            ],
        ]);

        User::whereId($id)->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()
            ->route('backend.profile.index', 'change_password') 
            ->flashify('updated');
    }

}
