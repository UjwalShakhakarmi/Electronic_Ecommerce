<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = [
    
    'Brand_id',
    'product_name',
    'Product_Img',
    'category',
    'Description',
    'Type',
    'status',
    'HighLight_Heading',
    'HighLight_Desc',
    'Specification',
    'Meta_Title',
    'Meta_Desc',
    'Meta_Key',
    'Actual_Price',
    'Offer_Price',
    'Quantity',
    'Priority',
    'new_arrival',
    'Featured_products',
    'popular_products',
    'offers_products',
];

   //belongs to relationship
   public function brand()
   {
       return $this->belongsTo(Brand::class,'Brand_id','id');
   }

}
