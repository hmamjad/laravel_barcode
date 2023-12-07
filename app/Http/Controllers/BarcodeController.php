<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index(Request $request) 
    {

        // dd($request->all());
      $productCode = $request['code'];
        // $productCode = rand(1234567890,50);

        return view('barcode', [
            'productCode' => $productCode
        ]);
    }
}