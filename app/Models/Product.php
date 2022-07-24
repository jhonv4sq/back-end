<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'image',
        'price',
        'stock',
        'description',
    ];

    public function record(){
        return $this->hasMany(Record::class);
    }

    static function lessStock(Product $product)
    {
        $product->stock--;
        $product->save();
    }

    static function moreStock(Product $product)
    {
        $product->stock++;
        $product->save();
    }

    static function checkStock(Product $product)
    {
        $stock = $product->stock;
        return $stock ? true : false;
    }
}
