<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function saveBrand(Request $req)
    {
        $req->validate([
            'Brand_Name' => 'required',
            'Brand_Img' => 'required',

        ]);
    
        $image = $req->file('Brand_Img');
        $image->store('img','public');
        $file_path = $image->store('img','public');
        
        $brand = new Brand;
        $brand->Brand_Name = $req->input('Brand_Name');
        $brand->Brand_Img = $file_path;
        $brand->save();
        
        if(!$brand)
        {
            return back()->with('fail','Something went wrong');
        }
        else{
            return redirect()->back()->with('status','New Brand has been added Successfully');  
        }
    }
    public function DeleteBrand($id)
    {
        $data = Brand::find($id);
        $data->delete();
        return redirect()->back();
    }
}
