<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Brand;
use Modules\Product\Http\Requests\BrandRequestForm;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('product::brand.index',compact('brands'));
    }

    public function create()
    {
        return view('product::brand.form');
    }

    public function store(BrandRequestForm $request)
    {
        Brand::create($request->persist());

        return redirect()->route('backend.brands.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        return view('unit::show');
    }

    public function edit(Brand $brand)
    {
        return view('product::brand.form', compact('brand'));
    }

    public function update(BrandRequestForm $request, Brand $brand)
    {
        $brand->update($request->persist());
        return redirect()->route('backend.brands.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('backend.brands.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
