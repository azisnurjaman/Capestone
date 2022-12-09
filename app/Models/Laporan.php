<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    public $table = 'laporans';
    public $fillable = ['nama', 'email', 'alamat', 'keterangan'];
}
