<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Api\RecordController;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return response(json_encode($products), Response::HTTP_OK);
    }

    public function show($id)
    {
        $product = Product::find($id);
        return response(json_encode($product), Response::HTTP_OK);
    }

    public function buy($id)
    {
        $product = Product::find($id);
        
        if(Product::checkStock($product)){
            $record = new RecordController();
            Product::lessStock($product);
            return $record->store($product, 'purchase successfully.', true);
        }
        if(!Product::checkStock($product)){
            return response('without stock.');
        }
    }

    public function refund($id)
    {
        $product = Product::find($id);
        Product::moreStock($product);

        $record = new RecordController();
        return $record->store($product, 'refund successfully.', false);
    }
}
