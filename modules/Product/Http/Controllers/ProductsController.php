<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Unit;
use Spatie\Permission\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Modules\Product\Http\Requests\ProductRequestForm;
use Illuminate\Routing\Controller;
use App\Exports\ProductExport;
use App\Imports\ProductImport;
use Maatwebsite\Excel\Facades\Excel;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::with('vendor')->with('supplier')->with('category')->with('brand')->with('unit')->with('media')->get();
        return view('product::products.index', compact('products'));
    }

    public function create()
    {
        $data['vendors'] = User::where('role_id', 7)->get();

        $data['suppliers'] = User::where('role_id', 8)->get();

        $data['categories'] = User::get();

        $data['categories'] = Category::get();

        $data['brands'] = Brand::get();

        $data['units'] = Unit::get();

        return view('product::products.form', $data);
    }

    public function store(ProductRequestForm $request)
    {
        $product = Product::create($request->validated());

        if($request->hasFile('image')){
            $product->addMedia($request->image)->toMediaCollection('products');
        }

        return redirect()->route('backend.products.index')->flashify('Created', 'Data has been created successfully.');
    }

    public function show($id)
    {
        $product = Product::where('id', $id)->with('vendor')->with('supplier')->with('category')->with('brand')->with('unit')->with('media')->first();
        return view('product::products.view', compact('product'));
    }

    public function edit(Product $product)
    {
        $data['vendors'] = User::where('role_id', 10)->get();

        $data['suppliers'] = User::where('role_id', 11)->get();

        $data['categories'] = User::get();

        $data['categories'] = Category::get();

        $data['brands'] = Brand::get();

        $data['units'] = Unit::get();
        $data['product'] = $product;
        return view('product::products.form', $data);
    }

    public function update(ProductRequestForm $request, Product $product)
    {
        $product->update($request->validated());

        if($request->hasFile('image')){
            $product->clearMediaCollection('products');
            $product->addMedia($request->image)->toMediaCollection('products');
        }

        return redirect()->route('backend.products.index')->flashify('Updated', 'Data has been updated successfully.');

    }

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('backend.products.index')->flashify('Deleted', 'Data has been deleted successfully.');

    }

    public function export()
    {
         return Excel::download(new ProductExport, 'products.xlsx');
    }

    public function importExportView()
    {
        return view('product::import');
    }

    public function import()
    {
        Excel::import(new ProductImport,request()->file('file'));
        return redirect()->route('backend.products.index');
    }

    public function search(Request $request)
    {
        $output = "";
        $products=Product::where('name','LIKE','%'.$request->search."%")
                            ->orWhere('price','LIKE','%'.$request->search."%")
                            ->orWhere('status','LIKE','%'.$request->search."%")->with('vendor')->with('supplier')->with('category')->with('brand')->with('unit')->with('media')->get();

    if($products)
    {
        foreach ($products as $key => $product) {
            $output.='<tr>'.
            '<td>'.$product->id.'</td>'.
            '<td>'.$product->vendor->name .'</td>'.
            '<td>'.$product->supplier->name .'</td>'.
            '<td>'.$product->category->name .'</td>'.
            '<td>'.$product->brand->name .'</td>'.
            '<td>'.$product->unit->name .'</td>'.
            '<td>'.$product->name.'</td>'.
            '<td><img src=" '.$product->getFirstMediaUrl('products').' " style="height:100px; width: 100px; border-radius:50%;"></td>'.
            '<td>'.$product->sku.'</td>'.
            '<td>'.$product->price.'</td>'.
            '<td>'.$product->in_stock.'</td>'.
            '<td>'.$product->status.'</td>'.
            '</tr>';
        }
        
        return Response($output);
    }
}

}
