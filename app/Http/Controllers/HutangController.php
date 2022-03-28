<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\customer;
use DB;
use Illuminate\Support\Facades\Storages;

class HutangController extends Controller
{
    public function index()
    {
        $hutang = DB::table('hutang')->get();
        $data = array(
            'menu' => 'hutang',
            'hutang' => $hutang,
            'submenu' => '',
        );

        return view('viewHutang',$data); 
    }

    // public function simpan(Request $request)
    // {
       
    //     DB::table('customer')->insert([
    //         'nama' => $request->nama_pembeli,      
    //         'alamat' => $request->alamat_pembeli,
    //         'no_hp' => $request->no_hp_pembeli,
    //         'nik' => $request->nik_pembeli, 
    //         'id_status' => $request->id_status,       
    //     ]);

    //     return redirect('/dropdown');
    // }

    // public function simpan2(Request $request)
    // {
       
    //     DB::table('customer')->insert([
    //         'nama' => $request->nama,      
    //         'alamat' => $request->alamat,  
    //         'no_hp' => $request->no_hp_pembeli,
    //         'nik' => $request->nik_pembeli, 
    //         'id_status' => $request->id_status,        
    //     ]);

    //     return redirect('/dropdown2');
    // }

    // public function editCust($id) 
    // {
        
    //     $data = Customer::where('id_status',$id)->first(); 
    //     return view('pages/editCust',compact(['data'])); 
    // } 

}
