<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Modules\User\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user::user.index',compact('users'));
    }

    public function create()
    {
        $role = Role::get();
        return view('user::user.form', compact('role'));
    }

    public function store(UserFormRequest $request)
    {
        $meta = $request->only((new User())->metaAttributes);

        $user = User::create($request->validated());

        $user->setMeta($meta);

        event(new Registered($user));

        Auth::login($user);

        return redirect()->route('backend.users.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        return view('user::show');
    }

    public function edit(User $user)
    {
        $data['role'] = Role::get();
        $data['user'] = $user;

        return view('user::user.form', $data);
    }

    public function update(UserFormRequest $request, User $user)
    {
        $meta = $request->only((new User())->metaAttributes);

        $user->update($request->validated());

        $user->setMeta($meta);

        return redirect()->route('backend.users.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        $user->deleteMeta();

        return redirect()->route('backend.users.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
