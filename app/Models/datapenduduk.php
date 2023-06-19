<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class datapenduduk extends Model
{
    use HasFactory;

    protected $guarded = [];

    public $sortable = ['id', 'nama_lengkap', 'jenis_kelamin', 'no_nik', 'no_kk','pekerjaan','rt','rw'];
}
