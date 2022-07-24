<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'message',
        'type',
        'product',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
