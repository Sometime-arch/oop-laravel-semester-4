<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class mhs extends Model
{
    //
    use HasFactory;
    protected $table="mhs";
    protected $fillable=['id','nim','nama','alamat','gender','no_hp'];
    public $timestamps = false;
}
