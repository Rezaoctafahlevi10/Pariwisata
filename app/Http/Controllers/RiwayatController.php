<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{
    public function index()
    {   
        #penerapan query builder, disini ada class DB mengambil tabel bernama 'pegawai_tabel' disini ada get() itu mengambil keseluruhan 
        $riwayat = DB::table('riwayatpemesanan')
                -> orderByRaw('Keuntungan  DESC') #penerapan raw query (raw metodh)
                ->get();
        //   return $wisata;
        //   return view('index');
    	// // mengirim data wisata$wisata ke view index
		return view('Riwayat',['riwayat'=> $riwayat]);
    }
    public function remove($id){
         DB::table('riwayatpemesanan')->where('id', $id)->delete();
         return redirect('riwayat');
    }// method untuk menampilkan view form tambah wisata$wisata

    public function create(){
        return view ('Form_tambahRiwayat');
    }

    public function createSave_Db(Request $request){

        // insert data ke table wisata$wisata
		DB::table('riwayatpemesanan')->insert([
			'tanggal' => $request->tanggal,
            'wista' => $request->wista,
            'Keuntungan'=> $request -> Keuntungan,
		]);
        
		// alihkan halaman ke halaman wisata$wisata
		return redirect('/riwayat');
    }
}
