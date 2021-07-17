<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Support\Facades\DB;

class InvoiceController extends Controller
{
    //
    function insert(Request $request)
    {

        $invoice = new Invoice();
        $invoice->invoice_no = $request->input('t1');
        $invoice->route_no = $request->t2;
        $invoice->total_ammount = $request->t3;
        $invoice->route_name = $request->t4;

        if($invoice->save())
        {
            return ['status' => "data hase"];
        }

    }

   
}
