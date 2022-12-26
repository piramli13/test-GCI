<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Checkout;
use App\Models\Kupon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Illuminate\Support\Str;
use Psy\VersionUpdater\Checker;

class TokoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user()->id;
        $barang = Barang::all();


        $checkout = Checkout::where('user_id', $user)->first();



        return view('toko.index', compact('barang', 'checkout'));
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
    public function store($id, Request $request)
    {
        $karakter = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789';
        $shuffle  = substr(str_shuffle($karakter), 0, 10);

        $beli = new Checkout();
        $beli->user_id = auth()->user()->id;
        $beli->transaksi_id = $shuffle;
        $beli->barangs_id = $request->barangs_id;
        $beli->status = 0;
        $beli->entity = $request->stok;
        $beli->total_harga = $request->total_harga * $request->stok;
        $beli->save();

        if ($request->total_harga * $request->stok >= 100000) {
            $kupon = new Kupon();
            $kupon->user_id = auth()->user()->id;
            $kupon->diskon = 10000;
            $kupon->expired = date('Y-m-d', strtotime('+3 month', strtotime(now())));
            $kupon->status = 1;
            $kupon->save();
        }

        $barangs = Barang::find($id);
        $barangs->stok = $barangs->stok - $request->stok;
        $barangs->save();


        return redirect()->route('invoice');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function invoice1()
    {
        $invoice = Checkout::where('user_id', auth()->user()->id)->where('status', 0)->get();
        $kupon = Kupon::where('user_id', auth()->user()->id)->where('status', 1)->first();

        
        
        return view('toko.invoice', compact('invoice', 'kupon'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function claim($id,$kupon)
    {
        $kupon = Kupon::find($kupon);
        
        if ($kupon->expired > now()) {
            $invoice = Checkout::find($id);
        $invoice->total_harga = $invoice->total_harga - 10000;
        $invoice->save();
        }
        

        
        $kupon->status = 0;
        $kupon->save();

        return redirect()->route('invoice');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function bayar($id)
    {
        $invoice = Checkout::find($id);
        $invoice->status = 1;
        $invoice->save();

        return redirect()->route('invoice');
    }

    
}
