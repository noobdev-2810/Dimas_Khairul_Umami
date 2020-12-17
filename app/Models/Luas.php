<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Luas extends Model
{
    use HasFactory;

    protected $table = 'luas';

    protected $fillable = ['tahun','kecamatan_id'];
}
