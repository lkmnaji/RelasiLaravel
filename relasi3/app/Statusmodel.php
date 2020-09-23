<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statusmodel extends Model
{
    protected $table = 'status';
    protected $guarded = [];

    public function status_karyawan(){
        return $this->hasMany(Karyawanmodel::class,'status_id','id');
    }
}
