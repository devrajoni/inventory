<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Http\Requests\CategoryRequestForm;
use Spatie\MediaLibrary\InteractsWithMedia;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::with('media')->get();
        return view('product::category.index',compact('categories'));
    }

    public function create()
    {
        return view('product::category.form');
    }

    public function store(CategoryRequestForm $request)
    {
        $category = Category::create($request->validated());

        if($request->hasFile('logo')){
            $category->addMedia($request->logo)->toMediaCollection('category');
        }

        return redirect()->route('backend.categories.index')->flashify('Created', 'Data has been created successfully.');

    }

    public function show($id)
    {
        return view('category::show');
    }

    public function edit(Category $category)
    {
        return view('product::category.form', compact('category'));
    }

    public function update(CategoryRequestForm $request, Category $category)
    {
        $category->update($request->validated());

        if($request->hasFile('logo')){
            $category->clearMediaCollection('category');
            $category->addMedia($request->logo)->toMediaCollection('category');
        }
        return redirect()->route('backend.categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('backend.categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
