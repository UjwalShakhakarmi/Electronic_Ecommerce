<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;
    protected $table = 'brands';
    protected $fillable = ['Brand_Name','Brand_Img'];

    public function Product()
    {
        return $this->hasMany(Product::class);
    }
}
