<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ProductModel extends Model
{
    use HasFactory;
    
    function getProducts(){
        return DB::table('product')->get();
    }

    function addProcess($product_name, $price, $description, $image){
        return DB::table('product')->insert([
            'product_name' => $product_name,
            'price' => $price,
            'product_description' => $description,
            'image' => $image
        ]);
    }

    function getUpdateItem($id){
        return DB::table('product')->where('id', $id)->get();
    }

    function updateProcess($id, $product_name, $price, $description, $image)
    {
        return DB::table('product')->where('id', $id)->update([
            'product_name' => $product_name,
            'price' => $price,
            'product_description' => $description,
            'image' => $image
        ]);
    }

    function deleteItem($id)
    {
        return DB::table('product')->where('id', $id)->delete();
    }
}
