<?php

namespace Modules\Product\Http\Livewire;

use Livewire\Component;
use Modules\Product\Entities\Product;
use Modules\Product\Http\Requests\ProductFormRequest;

class Products extends Component
{
    public function render()
    {
        return view('product::livewire.products');
    }
}
