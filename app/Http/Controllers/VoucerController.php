<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\voucer;
use App\Models\invoice;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\StorevoucerRequest;
use App\Http\Requests\UpdatevoucerRequest;
use Illuminate\Contracts\Support\ValidatedData;

class VoucerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function addVoucer(StorevoucerRequest $request)
    {
        $exdate = now()->addDays(30)->toDateTimeString();
        $shortId = time() . Str::random(4);
        $validatedData = $request->validate([
            'costumer_id' => 'required',
        ]);
        $validatedData['id'] = $shortId;
        $validatedData['exp_time'] = $exdate;
        // dd($validatedData);
        $idIn = $request['idInvoice'];
        voucer::create($validatedData);
        invoice::where('id', $idIn)->delete();
        return  redirect('/')->with('success',   'Voucer berhasil di redeem, kode voucer: '.$shortId);
    }

    public function useVoucer(Request $request)
    {
        $exists = voucer::where('id', $request->id)->where('costumer_id',$request->costumer_id)->exists();
        if ($exists) {
            $hasil = voucer::where('id', $request->id)->where('costumer_id',$request->costumer_id)->latest()->get();
            $exp = $hasil[0]->exp_time;
            $now = now()->toDateTimeString();
            if($now > $exp){
                voucer::where('id', $request->id)->delete();
            return response()->json(['error' => true, 'data' => "voucer telah kadaluarsa",]);
            }
            voucer::where('id', $request->id)->delete();
            return response()->json(['success' => true]);
        } else {
            return response()->json(['error' => true, 'data' => "voucer tidak di temukan",]);
        }
    }

    public function addInvoice(Request $request)
    {
        $exists = invoice::where('id', $request->id)->exists();
        if ($exists) {
            $id = invoice::where('id', $request->id)->latest()->get();
            return response()->json(['success' => true, 'data' => $id,]);
        } else {
            return response()->json(['error' => true, 'data' => "Invoice tidak di temukan",]);
        }
    }
}
