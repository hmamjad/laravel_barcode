<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BarcodeController extends Controller
{
    public function index() 
    {

        return view('create_barcode');
    }



    public function showbarcode(Request $request) 
    {

        // dd($request->all());
      $code = $request['code'];
      $row = $request['row'];
      $col = $request['col'];
        

        return view('show_barcode', [
            'code' => $code, 'row'=>$row,'col'=>$col
        ]);
    }


}