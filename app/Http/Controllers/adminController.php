<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Http\Request;

class adminController extends Controller
{
   
    public function loginPage()
    {
        return view('auth.login');
    }
    public function index()
    {
        $Brands = Brand::all();
        $Products = Product::all();
        return view("AdminPage.Adminindex",compact('Brands','Products'));
    }
    public function product()
    {
        $Product = Product::all();
        return view("AdminPage.Adminproduct",compact('Product'));
    }
    public function Addproduct()
    {
        $BrandData = Brand::all();
        return view("AdminPage.AddProduct_index",compact('BrandData'));
    }
    public function Addbrand()
    {
        $BrandData = Brand::all();
        return view("AdminPage.AddBrand",compact('BrandData'));
    }
    public function EditProduct($id)
    {
        $Product = Product::find($id);
        $BrandData = Brand::all();

        return view("AdminPage.EditProduct",compact('Product','BrandData'));
    }
}
