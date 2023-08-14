<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use File;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function saveProduct(Request $req)
    {
        $req->validate([
            'product_name' => 'required ',
            'Category' => 'required',
            'Brand' => 'required',
            'Type' => 'required',
            'Description' => 'required',
            'Actual_Price' => 'required|integer',
            'Offer_Price' => 'required|integer',
            
        ]);

        $image = $req->file('Product_Img');
        $image->store('img/products','public');
        $file_path = $image->store('img/products','public');

        $saveProduct = new Product();
        $saveProduct->product_name = $req->input('product_name');
        $saveProduct->Category = $req->input('Category');
        $saveProduct->Brand_id = $req->input('Brand');
        $saveProduct->Type = $req->input('Type');
        $saveProduct->Description = $req->input('Description');
        $saveProduct->Product_Img = $file_path;
        $saveProduct->HighLight_Heading = $req->input('HighLight_Heading');
        $saveProduct->HighLight_Desc = $req->input('HighLight_Desc');
        $saveProduct->Specification = $req->input('Specification');
        $saveProduct->Meta_Title = $req->input('Meta_Title');
        $saveProduct->Meta_Desc = $req->input('Meta_Desc');
        $saveProduct->Meta_Key = $req->input('Meta_Key');
        $saveProduct->Actual_Price = $req->input('Actual_Price');
        $saveProduct->Offer_Price = $req->input('Offer_Price');
        $saveProduct->Priority = $req->input('Priority');
        $saveProduct->Quantity = $req->input('Quantity');
        $saveProduct->new_arrival = $req->input('new_arrival') == true? '1':'0';
        $saveProduct->Featured_products = $req->input('Featured_products') == true? '1':'0';
        $saveProduct->popular_products = $req->input('popular_products') == true? '1':'0';
        $saveProduct->offers_products = $req->input('offers_products') == true? '1':'0';
        $saveProduct->status = $req->input('status') == true ? '1':'0';
        $saveProduct->save();
        if(!$saveProduct)
        {
            return back()->with('fail','Something went wrong');
        }
        else{
            return redirect()->back()->with('status','Product Has Been Added!!');
        }
    }
    public function DeleteProduct($id)
    {
        $Product = Product::find($id);
        $Product->delete(); 
        return redirect()->back()->with('status','Product Has Been Deleted Successfully');
    }
    public function UpdateProduct(Request $req, $id)
    {
        $UpdateProduct = Product::find($id);
        $UpdateProduct->product_name = $req->input('product_name');
        $UpdateProduct->Category = $req->input('Category');
        $UpdateProduct->Brand_id = $req->input('Brand');
        $UpdateProduct->Type = $req->input('Type');
        $UpdateProduct->Description = $req->input('Description');
        $UpdateProduct->HighLight_Heading = $req->input('HighLight_Heading');
        $UpdateProduct->HighLight_Desc = $req->input('HighLight_Desc');
        $UpdateProduct->Specification = $req->input('Specification');
        $UpdateProduct->Meta_Title = $req->input('Meta_Title');
        $UpdateProduct->Meta_Desc = $req->input('Meta_Desc');
        $UpdateProduct->Meta_Key = $req->input('Meta_Key');
        $UpdateProduct->Actual_Price = $req->input('Actual_Price');
        $UpdateProduct->Offer_Price = $req->input('Offer_Price');
        $UpdateProduct->Priority = $req->input('Priority');
        $UpdateProduct->Quantity = $req->input('Quantity');
        $UpdateProduct->new_arrival = $req->input('new_arrival') == true? '1':'0';
        $UpdateProduct->Featured_products = $req->input('Featured_products') == true? '1':'0';
        $UpdateProduct->popular_products = $req->input('popular_products') == true? '1':'0';
        $UpdateProduct->offers_products = $req->input('offers_products') == true? '1':'0';
        $UpdateProduct->status = $req->input('status') == true ? '1':'0';
        if($req->hasFile('Product_Img')){
            $OldPath = 'public/img/products'.$UpdateProduct->Product_Img;
            if(File::exists($OldPath)){
                File::delete($OldPath);
            }
            $image = $req->file('Product_Img');
            $image->store('img/products','public');
            $file_path = $image->store('img/products','public');
            $UpdateProduct->Product_Img = $file_path;
        }
        $UpdateProduct->update();
        return redirect()->back()->with('status','Product has been Updated Successfully');
    }
}
