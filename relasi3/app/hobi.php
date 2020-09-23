<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hobi extends Model
{
    protected $guarded = [];

    public function karyawan(){
        return $this->belongsToMany(Karyawanmodel::class, 'hobi_karyawans', 'hobi_id', 'karyawan_id');
    }
}
