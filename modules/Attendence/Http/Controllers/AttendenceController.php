<?php

namespace Modules\Attendence\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Attendence\Entities\DailyAttendence;
use App\Models\User;

class AttendenceController extends Controller
{
    public function index()
    {
        $data = User::get();
        return view('attendence::index', compact('data'));
    }

    public function create()
    {
        return view('attendence::form');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('attendence::show');
    }

    public function edit($id)
    {
        return view('attendence::edit');
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
