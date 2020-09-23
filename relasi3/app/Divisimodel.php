<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Divisimodel extends Model
{
    protected $table = 'divisi';
    protected $guarded = [];

    public function divisi_karyawan(){
        return $this->hasMany(Karyawanmodel::class,'divisi_id','id');
    }
}
