<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class absence extends Model
{
    protected $fillable =[

        'noreg',
        'nama',
        'prodi',
        'keterangan',
        'tgl'
    ];
}
