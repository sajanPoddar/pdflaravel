<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item; 
use PDF;

class ItemController extends Controller
{
    //
        public function pdfview(Request $request)

    {

        $items = Item::all();
        view()->share('items',$items);


        if($request->has('download')){

            $pdf = PDF::loadView('pdfview');

            return $pdf->download('pdfview');

        }


        return view('pdfview')->with(compact('items'));

    }
}
