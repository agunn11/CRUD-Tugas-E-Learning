<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa'; // kasih tahu Laravel nama tabelnya
    protected $fillable = ['nama', 'nim', 'jurusan'];
}
