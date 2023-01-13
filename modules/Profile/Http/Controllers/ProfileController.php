<?php

namespace Modules\Profile\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($tab='profile')
    {
        return view('profile::profile', compact('tab'));
    }

    public function create()
    {
        return view('profile::create');
    }

    public function update(Request $request, User $user)
    {
        $validated = $request->validate([
            'name' => ['required','max:255'],
            'email' => ['required','email','max:255','unique:users,email,' . $user->id],
            'phone' => ['required','max:255','unique:users,phone,' . $user->id],
            'username' => ['required','max:255','unique:users,username,' . $user->id],
            'image' => ['nullable','image','max:2048'],
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = upload($request->image, 'users/', $user->image);
        }

        $user->update($validated);

        return redirect()
            ->route('backend.profile.index', 'edit_profile')
            ->flashify('updated');
    }

}
