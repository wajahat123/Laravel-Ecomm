<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;

class Gallery extends Model
{
    use HasFactory;

    public $publicDir = 'assets/site/img/';

    protected $fillable = ['product_id','image','type'];



    public function image(): Attribute

    {


        //image = field in Gallery Model
        return Attribute::make(

            get: fn($xyz) => $this->publicDir . $xyz
        );


    }


    public function product(){

        return $this->belongsTo(Product::class);
    }
}
