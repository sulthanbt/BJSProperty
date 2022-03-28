<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class PemesananController extends Controller
{
    public function index()
    {
        $pemesanan = DB::table('pemesanan')->get();
        $data = array(
            'menu' => 'pemesanan',
            'pemesanan' => $pemesanan,
            'submenu' => ''
        );

        return view('pemesanan/view_pemesanan',$data);
    }

    public function insertPemesanan()
    {
        $pemesanan = DB::table('pemesanan')->get();
        $data = array(
            'menu' => 'barang',
            'pemesanan' => $pemesanan,
            
            'submenu' => ''
        );

        return view('pemesanan/view_pemesanan',$data);  
    }

}
