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
            'Supplier',
            'Vendor',
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
                    $product->supplier->name,
                    $product->vendor->name,
                ];
            });
    }
}
