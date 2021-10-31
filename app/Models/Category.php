<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Category extends Model
{
    use HasFactory;

        //using belongsto verb one to one
        public function product(){
            return $this->belongsTo(Product::class, 'Cat_id','id');
        }
        //using eloquent
        public function assignedProduct(){
            return Product::where('id', $this->Cat_id)->first();
        }
}
