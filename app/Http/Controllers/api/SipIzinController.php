<?php

namespace App\Http\Controllers\api;
use App\Http\Controllers\Controller;
use App\sip_izin;
use Illuminate\Http\Request;

class SipIzinController extends Controller
{
    public function index(Request $request)
    {
        $data = sip_izin::where('username',$request->username)->get();
        return $data;
    }

    public function tambahizin(Request $request)
    {
       
        $absen = sip_izin::create([
            'username' => $request->username,
            'nama' => $request->nama,
            'NIP' => $request->NIP,
            'status' => $request->status,
            'keterangan' => $request->keterangan,
            'tanggal' =>  $request->tanggal,
            'approve' => 0,
        ]);
        return response()->json();
    }

    public function hapusizin($id)
    {
        $absen = sip_izin::destroy($id);
 
        return response()->json();
    }
}

