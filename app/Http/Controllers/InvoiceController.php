<?php

namespace App\Http\Controllers;

use App\Models\invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StoreinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;

class InvoiceController extends Controller
{

    public function tambahInvoice(StoreinvoiceRequest $request)
    {
        // $total = $request->formTotal;
        // dd($request->total);
        $shortId = time() . Str::random(4);
        if ($request->total < 0) {
            return  redirect('/')->with('success',   'terjadi error');
        }
        $validatedData = $request->validate([
            'total' => 'required'
        ]);
        $validatedData['id'] = $shortId;
        // dd($validatedData);
        invoice::create($validatedData);
        return  redirect('/')->with('success',   'Pembayaran Berhasil, ID tarnsaksi: '.$shortId );
    }

}
