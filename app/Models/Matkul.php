<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Matkul extends Model
{
    //


    public $timestamps = false;
    public $incremeting=false;
    protected $guarded = [];
    protected $primaryKey = 'kode_matkul';
     protected $keyType = 'string';
    protected $fillabel = [
        'kode_matkul',
        'nama',
        'sks',
    ];


}
