<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\sip_cuti;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SipCutiController extends Controller
{
    public function index(Request $request)
    {
        $data = sip_cuti::where('username',$request->username)->get();
        return $data;
    }

    public function tambahCuti(Request $request)
    {
       
        $absen = sip_cuti::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'NIP' => $request->NIP,
            'keterangan' => $request->keterangan,
            'approved' => 0,
            'tanggal_mulai_cuti' =>  $request->tanggal_mulai_cuti,
            'tanggal_akhir_cuti' => $request->tanggal_akhir_cuti,
        ]);
        return response()->json();
    }

    public function hapusCuti($id)
    {
        $absen = sip_cuti::destroy($id);
 
        return response()->json();
    }
}
