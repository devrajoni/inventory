<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\PermissionRegistrar;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Modules\User\Http\Requests\UserFormRequest;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::with('role')->get();

        $data['roles'] = Role::count();

        $data['permissions'] = Permission::count();

        return view('user::user.index', $data);
    }

    public function create()
    {
        $role = Role::get();
        return view('user::user.form', compact('role'));
    }

    public function store(UserFormRequest $request)
    {
        $meta = $request->only((new User())->metaAttributes);

        $user = User::create($request->persist());

        $user->setMeta($meta);

        $user->assignRole($request->role_id);


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

        $user->update($request->persist());

        $user->setMeta($meta);

        $user->assignRole($request->role_id);

        return redirect()->route('backend.users.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(User $user)
    {
        $user->delete();

        $user->deleteMeta();

        return redirect()->route('backend.users.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
