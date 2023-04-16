<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Unit;
use Modules\Product\Http\Requests\UnitRequestForm;

class UnitController extends Controller
{
    public function index()
    {
        $units = Unit::get();
        return view('product::unit.index',compact('units'));
    }

    public function create()
    {
        return view('product::unit.form');
    }

    public function store(UnitRequestForm $request)
    {
        Unit::create($request->validated());

        return redirect()->route('backend.units.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        return view('unit::show');
    }

    public function edit(Unit $unit)
    {
        return view('product::unit.form', compact('unit'));
    }

    public function update(UnitRequestForm $request, Unit $unit)
    {
        $unit->update($request->validated());
        return redirect()->route('backend.units.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Unit $unit)
    {
        $unit->delete();
        return redirect()->route('backend.units.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
