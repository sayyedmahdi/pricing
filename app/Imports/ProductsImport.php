<?php

namespace App\Imports;

use App\Models\Product;
use Maatwebsite\Excel\Concerns\ToModel;

class ProductsImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        if ($row[3] === null){
        }else{
            $product = Product::find($row[0]);
            if ($product){
                $product->price1 = $row[3];
                $product->price2 = $row[4];
                $product->price3 = $row[5];
                $product->save();
            }

        }

    }
}
