<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
   protected $fillable =['nama_guru', 'jenis_kelamin', 'tanggal_lahir', 'alamat_guru', 'no_telepon', 'input_date'];
}
