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

        return view('pemesanan/form_pemesanan',$data);  
    }

    
    public function tambahPemesanan(Request $post)
    {  
        DB::table('pemesanan')->insert([
            'nama' => $post->nama,
            'ttl' => $post->ttl,
            'pekerjaan' => $post->pekerjaan,
            'alamat' => $post->alamat,
            'telp' => $post->telp,
            'hp' => $post->hp,
            'no_kavling' => $post->no_kavling,
            'type' => $post->type,
            'harga_standart' => $post->harga_standart,
            'harga_kelebihan_tanah' => $post->harga_kelebihan_tanah,
            'booking_fee' => $post->booking_fee,
            'uang_muka' => $post->uang_muka,
            'kpr' => $post->kpr,
            'biaya_admin' => $post->biaya_admin,
        ]);

        return redirect('pemesanan/view_pemesanan');
    }

    public function editPemesanan($id_pemesanan) 
    {
        $pemesanan = DB::table('pemesanan')->where('id_pemesanan', $id_pemesanan)->get();
        $data = array(
            'menu' => 'pemesanan',
            'pemesanan' => $pemesanan,
            'submenu' => ''
        );
        
        return view('pemesanan/edit_pemesanan',$data);
    }

    public function updatePemesanan(Request $post)
    {
            DB::table('pemesanan')->where('id_pemesanan', $post->id_pemesanan)->update([
                'nama' => $post->nama,
                'ttl' => $post->ttl,
                'pekerjaan' => $post->pekerjaan,
                'alamat' => $post->alamat,
                'telp' => $post->telp,
                'hp' => $post->hp,
                'no_kavling' => $post->no_kavling,
                'type' => $post->type,
                'harga_standart' => $post->harga_standart,
                'harga_kelebihan_tanah' => $post->harga_kelebihan_tanah,
                'booking_fee' => $post->booking_fee,
                'uang_muka' => $post->uang_muka,
                'kpr' => $post->kpr,
                'biaya_admin' => $post->biaya_admin,
            ]);
        
        return redirect('pemesanan/view_pemesanan');
    }

    public function hapus($id_pemesanan)
    {
    	DB::table('pemesanan')->where('id_pemesanan',$id_pemesanan)->delete();
	    return redirect('/pemesanan/view_pemesanan');
    }
}
