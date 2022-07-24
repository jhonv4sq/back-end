<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Record;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;

class RecordController extends Controller
{

    public function index()
    {
        $records = Record::orderBy('id', 'desc')->get();
        return response(json_encode($records), Response::HTTP_OK);
    }

    public function store($product, $message, $type)
    {
        $record = $product->record()->create([
            'date' => date('Y-m-d' ,strtotime(Carbon::now())),
            'time' => date('H:i' ,strtotime(Carbon::now())),
            'product' => $product->name,
            'message' => $message,
            'type' => $type,
        ]);

        return response($message, Response::HTTP_CREATED);
    }
}
