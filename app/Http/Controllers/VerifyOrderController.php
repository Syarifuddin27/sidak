<?php

namespace App\Http\Controllers;

use App\VerifyOrder;
use App\Permintaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\VerifyOrder  $verifyOrder
     * @return \Illuminate\Http\Response
     */
    public function show(VerifyOrder $verifyOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\VerifyOrder  $verifyOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(VerifyOrder $verifyOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\VerifyOrder  $verifyOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $konfir = Permintaan::find($id);

        if ($konfir->cek == 0) {
            $konfir->cek = 1;
            VerifyOrder::create([
                'permintaan_id' => $id,
                'name' => Auth::user()->name
            ]);
        }
        $konfir->save();

        return redirect()->route('permintaan.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\VerifyOrder  $verifyOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(VerifyOrder $verifyOrder)
    {
        //
    }
}
