<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductModel;

class ProductsController extends Controller
{
    function getProducts(){
        $products = ProductModel::all();
        return view('admin.product.getProducts',['products'=>$products]);
    }
    function updateProduct(Request $request,$pid){
        $products=ProductModel::where('pid',$pid)->first();
        $products->$pid=$request->$pid;
        $products->pname=$request->pname;
        $products->company=$request->company;
        $products->band=$request->selectBand;
        $products->year=$request->selectYear;
        if(isset($_FILES['imageFile'])&& $_FILES['imageFile']['error']===UPLOAD_ERR_OK){
            $pimage='data:image/png;base64,'.base64_encode(file_get_contents($_FILES['imageFile']['imp_name']));
            $products->pimage=$pimage;
        }
        $products->save();
        return redirect('admin/product/updateProduct/'.$pid)->with("Note","Sua thanh cong !");
    }
}
