<?php

namespace App\Http\Controllers;

use App\Models\ProductModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ProductController extends Controller
{
    function getProducts(){
        $getProducts = ProductModel::getProducts();
        return view('index',['products' => $getProducts]);
    }

    function addProductProcess(Request $request) {
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');
        $image = time().".".$request->file('image')->extension();
        $request->file('image') -> move('images',$image);
        $add_product = ProductModel::addProcess($product_name,$price,$description,$image);
        if ($add_product == false) {
            return "add hỏng";
        }
        return redirect('/');
    }

    function update($id){
        $updateItem = ProductModel::getUpdateItem($id);
        // dd($updateItem);
        return view('product/update', ['updateItem' => $updateItem]);
    }

    function updateProcess($id, request $request){
        $product_name = $request->input('product_name');
        $price = $request->input('price');
        $description = $request->input('description');
        if($image = $request->hasfile('image')){
            $image = time() . "." . $request->file('image')->extension();
            $request->file('image')->move('images', $image);
            $update_product = ProductModel::updateProcess($id, $product_name, $price, $description, $image);
            if ($update_product == false) {
                return "update hỏng";
            }
            return redirect('/');
        }
        return "chưa có ảnh để update";
    }

    function delete($id)
    {
        $deleteItem = ProductModel::deleteItem($id);
        if ($deleteItem == false) {
            return "delete hỏng";
        }
        return redirect('/');
    }
}
