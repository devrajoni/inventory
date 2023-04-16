<?php

namespace App\Exports;

use Modules\Product\Entities\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ProductExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function headings(): array
    {
        return [
            '#',
            'Vendor',
            'Supplier',
            'Category',
            'Brand',
            'Unit',
            'Name',
            'Sku',
            'Description',
            'Buying Price',
            'Selling Price',
            'Discout',
            'Price',
            'Stock',
            'Status',
        ];
    }
    public function collection()
    {
        return Product::query()
            ->with([
                'vendor',
                'supplier',
                'category',
                'brand',
                'unit',
                'media',
            ])
            ->get()
            ->map(function($product) {
                return [
                    $product->id,
                    $product->vendor->name,
                    $product->supplier->name,
                    $product->category->name,
                    $product->brand->name,
                    $product->unit->name,
                    $product->name,
                    $product->sku,
                    $product->description,
                    $product->buying_price,
                    $product->selling_price,
                    $product->discount,
                    $product->price,
                    $product->in_stock,
                    $product->status,
                ];
            });
    }
}
