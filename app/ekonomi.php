<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ekonomi extends Model
{
    protected $table = "ekonomi";
    protected $fillable = ['kelas', 'guru', 'wali', 'siswa', 'umur'];
}
