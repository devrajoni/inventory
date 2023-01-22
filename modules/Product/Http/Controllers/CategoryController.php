<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Entities\Category;
use Modules\Product\Http\Requests\CategoryRequestForm;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('product::category.index',compact('categories'));
    }

    public function create()
    {
        return view('product::category.form');
    }

    public function store(CategoryRequestForm $request)
    {
        Category::create($request->persist());

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
        $category->update($request->persist());
        return redirect()->route('backend.categories.index')->flashify('Updated', 'Data has been updated successfully.');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('backend.categories.index')->flashify('Deleted', 'Data has been deleted successfully.');
    }
}
