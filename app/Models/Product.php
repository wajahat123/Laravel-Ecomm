<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function images(){
          
        return $this->hasMany(Gallery::class,"product_id","id");

    }

    protected $fillable = ['name','slug','quantity','Price'];

    public const PRODUCT_IMAGE = 1;
}
