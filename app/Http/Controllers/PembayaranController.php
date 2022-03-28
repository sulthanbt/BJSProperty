<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PembayaranController extends Controller
{
    //
    public function index()
    {
        $kpr = DB::table('kpr')->get();
        $data = array(
            'menu' => 'kpr',
            'kpr' => $kpr,
            'submenu' => '',
        );

        return view('pembayaran/viewKPR',$data); 
    }


    public function cashbertahap()
    {
        $cb = DB::table('cash_bertahap')->get();
        $data = array(
            'menu' => 'cash_bertahap',
            'cash_bertahap' => $cb,
            'submenu' => '',
        );

        return view('pembayaran/viewCashBertahap',$data); 
    }

    

}
