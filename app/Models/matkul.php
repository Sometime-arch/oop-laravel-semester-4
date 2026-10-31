<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class matkul extends Model
{
    //
    use HasFactory;
    protected $table="matkul";
    protected $fillable=['id','kd_matkul','nama_matkul','sks','status'];
    public $timestamps = false;
}
