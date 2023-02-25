<?php

namespace App\Imports;

use Modules\Product\Entities\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Product([
            'name' => $row[0],
            'sku' => $row[1],
            'description' => $row[2],
            'buying_price' => $row[3],
            'selling_price' => $row[4],
            'discount' => $row[5],
            'price' => $row[6],
            'in_stock' => $row[7],
            'status' => $row[8],
        ]);
    }
}
