<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Brand;
use Modules\Product\Http\Requests\BrandRequestForm;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::with('media')->get();
        return view('product::brand.index',compact('brands'));
    }

    public function create()
    {
        return view('product::brand.form');
    }

    public function store(BrandRequestForm $request)
    {
        $brand = Brand::create($request->validated());

        if($request->hasFile('logo')){
            $brand->addMedia($request->logo)->toMediaCollection('brand');
        }

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
        $brand->update($request->validated());

        if($request->hasFile('logo')){
            $brand->clearMediaCollection('brand');
            $brand->addMedia($request->logo)->toMediaCollection('brand');
        }

        return redirect()->route('backend.brands.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Brand $brand)
    {
        $brand->delete();
        return redirect()->route('backend.brands.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
