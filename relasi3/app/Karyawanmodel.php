<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawanmodel extends Model
{
    protected $table = 'karyawan';
    protected $guarded = [];

    public function karyawan_status(){
        return $this->belongsTo(Statusmodel::class,'status_id','id');
    }
    public function karyawan_divisi(){
        return $this->belongsTo(Divisimodel::class,'divisi_id','id');
    }
    public function karyawan_jabatan(){
        return $this->belongsTo(Jabatanmodel::class,'jabatan_id','id');
    }
    public function hobi(){
        return $this->belongsToMany(hobi::class, 'hobi_karyawans', 'karyawan_id', 'hobi_id');
    }

}
