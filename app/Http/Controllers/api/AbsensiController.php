<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\sip_absensi;
use App\sip_jam_kerja;
use App\sip_kegiatan;
use Carbon\Carbon;

class AbsensiController extends Controller
{
    public function storeAbsensi(Request $request)
    {
        // dd(auth()->user());
        $datetime = Carbon::now();
        $tanggal = $datetime->format("Y-m-d");
        $time = $datetime->format("H:i:s");
        
        $jadwal_datang = auth()->user()->pegawai->jam_kerja == null ? "not set" : Carbon::createFromFormat('H:i:s', auth()->user()->pegawai->jam_kerja->jam_datang)->format("H:i");
        $jadwal_pulang = auth()->user()->pegawai->jam_kerja == null ? "not set" : Carbon::createFromFormat('H:i:s', auth()->user()->pegawai->jam_kerja->jam_pulang)->format("H:i");

        // dd($time);
        if ($jadwal_datang > $time || $jadwal_pulang < $time) {
            $respon = [
                'status' => 'success',
                'msg' => 'Telah melakukan pelanggaran absensi harap hati-hati',
                'errors' => null,
                'content' => [
                    'status_code' => 200,
                ]
            ];
            return response()->json($respon, 200);
        }
        
        
        $absensi = sip_absensi::whereUser( auth()->user()->username )->whereTanggal( $tanggal )->first();
        if ($absensi == null) {
            sip_absensi::create([
                'user' => auth()->user()->username,
                'tanggal' => $tanggal,
                'jam_datang' => $time,
                'jam_datang_jadwal' => $request->jam_datang_jadwal,
                'jam_pulang_jadwal' => $request->jam_pulang_jadwal,
            ]);
            $respon = [
                'status' => 'success',
                'msg' => 'Telah melakukan absensi datang ...!',
                'errors' => null,
                'content' => [
                    'status_code' => 200,
                ]
            ];
            return response()->json($respon, 200);
        }
        $respon = [
            'status' => 'success',
            'msg' => 'Telah melakukan absensi datang pada $absensi->jam_datang ...!',
            'errors' => null,
            'content' => [
                'status_code' => 200,
            ]
        ];
        return response()->json($respon, 200);
    }
}