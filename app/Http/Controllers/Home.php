<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Request;

class Home extends Controller
{

    public function index()
    {
        $Product = Product::all();
        $New_Products = Product::where('new_arrival',1)->get();
        $Featured_products = Product::where('Featured_products',1)->get();
        $popular_products = Product::where('popular_products',1)->get();
        $Brand = Brand::all();
        return view("MainPage.index",compact('Product','Brand','New_Products','Featured_products','popular_products'));
    }
    public function about()
    {
        return view("MainPage.about");
    }
    public function products(Request $req )
    {
        $Product = Product::all();
        $Brand = Brand::all();
        $pro_filtered = $Product;
        $record = $Product;
        $Brand_Name = '';
        $search = Request::get('search');
        if(Request::get('sort') == 'newest')
        {
             $record = 'Newest';
            $pro_filtered = $Product->sortByDesc('created_at');
        }
        elseif(Request::get('sort') == 'popularity')
        {
            $record = 'Popular';
            if($Product->where('popular_products','1')->count() > 0){
                $pro_filtered = $Product->where('popular_products','1');

            }else{
                $pro_filtered = null;
            }
        }
        elseif(Request::get('sort') == 'Laptop')
        {
            $record = 'Laptop';
            
            $pro_filtered = $Product->where('Type','Laptop');
        }
        
        elseif(Request::get('sort') == 'Gadgets')
        {
            $record = 'Gadgets';
            if($Product->where('Type','Other Accessories')->count() > 0)
            {
                $pro_filtered = $Product->where('Type','Other Accessories');
            }else{
                $pro_filtered = null;
            }
        }
        elseif(Request::get('sort') == 'Gaming')
        {
            $record = 'Gaming Laptop';
            $pro_filtered = $Product->where('Category','Gaming Series');
        }
        elseif(Request::get('sort') == 'Other_series')
        {
            $record = 'Other Series';
            $pro_filtered = $Product->where('Category','Other Series');
        }
        elseif(Request::get('brand'))
        {
            $brandId = Request::get('brand');
            $Brand_Name = Brand::find($brandId); 
            $pro_filtered = $Product->where('Brand_id',$brandId);
        }
        else{
            $Product = Product::all();
            $record = 'All Products';
        }


        if($search === null)
        {
            $Product = Product::all();

        }
        elseif(Product::where('product_name','LIKE','%'.$search.'%')->count() > 0)
        {
            $pro_filtered = Product::where('product_name','LIKE','%'.$search.'%')->get();
        }
        else{
            $pro_filtered = null; 
        }

        return view("MainPage.product",compact('Product','Brand','pro_filtered','record','Brand_Name'));
    }
    public function product_detail($id)
    {
        $Product = Product::find($id);
        $popular_products = Product::where('popular_products',1)->get();
        return view("MainPage.productDetail",compact('Product','popular_products'));
    }
}
