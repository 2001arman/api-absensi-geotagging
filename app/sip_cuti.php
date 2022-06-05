<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sip_cuti extends Model
{
    protected $table = 'sip_cuti';
    protected $primaryKey = 'id';
    
    protected $fillable = [
        "username",
        "nama",
        "NIP",
        "keterangan",
        "tanggal_mulai_cuti",
        "tanggal_akhir_cuti",
    ];


}
