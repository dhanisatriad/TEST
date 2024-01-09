<?php

namespace App\Http\Controllers;

use App\Models\costumer;
use App\Http\Requests\StorecostumerRequest;
use App\Http\Requests\UpdatecostumerRequest;

class CostumerController extends Controller
{

    public function tambahCostumer(StorecostumerRequest $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required',
            'alamat' => 'required'
        ]);
        costumer::create($validatedData);
        return  redirect('/')->with('success',   'Costumer berhasil di daftarkan');
    }
}
