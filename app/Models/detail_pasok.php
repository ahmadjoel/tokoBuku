<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class detail_pasok extends Model
{
    use HasFactory;
    protected $table = "detail_pasok";
    protected $primaryKey = "id";
    public $incrementing=true;


    protected $guarded=[];
}
