<?php

namespace Modules\Product\Http\Livewire;

use Livewire\Component;
use Modules\Product\Entities\Product;
use Modules\Product\Entities\Category;
use Modules\Product\Entities\Brand;
use Modules\Product\Entities\Unit;
use App\Models\User;
use Modules\Product\Http\Requests\ProductFormRequest;

class ProductForm extends Component
{
    public function render()
    {
        $data['suppliers'] = User::get();

        $data['categories'] = Category::where('parent_id', null)->get();

        $data['brands'] = Brand::get();

        $data['units'] = Unit::get();

        return view('product::livewire.product-form', $data);
    }
}
