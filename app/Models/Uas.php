<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Uas extends Model
{
    use HasFactory;
    protected $table = '21312041_mahasiswa';

    protected $filltable = ['npm','nama','alamat'];
}
