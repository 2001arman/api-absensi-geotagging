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

        $data = sip_absensi::select('user','tanggal', 'jam_datang', 'jam_datang_jadwal', 'terlambat')
        ->where('user',$request->username)->get();
        $response = [
            'status' => 'success',
            'msg' => 'berhasil ambil data absen',
            'errors' => 'kosong',
            'content' => $data,
            ];
        return response()->json($response);
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

        // dd($data);

        if($data->isEmpty()){
            if($time >= '08:00'){
                $absen = sip_absensi::create([
                    'user' => $request->username,
                    'jam_datang' => $time,
                    'tanggal' => $tanggal,
                    'jam_datang_jadwal' => '08:00',
                    'jam_pulang_jadwal' => '16:00',
                    'terlambat' => 'true',
                ]);
            } else{
                $absen = sip_absensi::create([
                    'user' => $request->username,
                    'jam_datang' => $time,
                    'tanggal' => $tanggal,
                    'jam_datang_jadwal' => '08:00',
                    'jam_pulang_jadwal' => '16:00',
                    'terlambat' => 'false',
                ]);
            }
            

            $respon = [
                'status' => 'success',
                'msg' => 'Berhasil Absen',
                'errors' => "kosong",
                'content' => [
                    [
                    'user' => $absen->user,
                    'tanggal' => $absen->tanggal,
                    'jam_datang' => $absen->jam_datang,
                    'jam_datang_jadwal' => $absen->jam_datang_jadwal,
                    'terlambat' => $absen->terlambat,
                    ],],
            ];
        } else {
            $respon = [
                'status' => 'error',
                'msg' => 'Anda Sudah Absen',
                'errors' => "Anda sudah absen hari ini",
                'content' => [],
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
