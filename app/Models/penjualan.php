<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penjualan extends Model
{
    use HasFactory;
    protected $table = "penjualan";
    protected $primaryKey = "id";
    public $incrementing=true;


    protected $guarded=[];
}
