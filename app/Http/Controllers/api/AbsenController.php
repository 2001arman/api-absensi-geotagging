<?php

namespace App\Http\Controllers\api;

use App\sip_absensi;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    public function index(Request $request)
    {
        $data = sip_absensi::where('user',$request->username)->get();
        return $data;
    }

    public function tambahAbsen(Request $request)
    {
        $datetime = Carbon::now();
        $time = $datetime->format("H:i:s");
        $tanggal = $datetime->format("Y-m-d");
        $data = sip_absensi::where([
            'user' => $request->username,
            'tanggal' => $tanggal
        ])->get();

        if($data->isEmpty()){
            $absen = sip_absensi::create([
                'user' => $request->username,
                'jam_datang' => $time,
                'tanggal' => $tanggal,
                'jam_datang_jadwal' => '08:00',
                'jam_pulang_jadwal' => '16:00',
            ]);

            $respon = [
                'status' => 'success',
                'msg' => 'Berhasil Absen',
                'errors' => "kosong",
                'content' => [
                    'username' => $absen->user,
                    'jam_datang' => $absen->jam_datang,
                ]
            ];
        } else{
            $respon = [
                'status' => 'error',
                'msg' => 'Anda Sudah Absen',
                'errors' => "Anda sudah absen hari ini",
                'content' => "kosong",
                ];
        }
        return response()->json($respon);
    }

    public function keluarAbsen(Request $request, $id)
    {
        $datetime = Carbon::now();
        $time = $datetime->format("H:i:s");
        $absen = sip_absensi::findOrFail($id);
        $absen->jam_pulang = $time;
        $absen->save();
        return response()->json();
    }
}
