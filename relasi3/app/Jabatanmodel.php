<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatanmodel extends Model
{
    protected $table = 'jabatan';
    protected $guarded = [];

    public function jabatan_karyawan(){
        return $this->hasMany(Karyawanmodel::class,'jabatan_id','id');
    }
}
