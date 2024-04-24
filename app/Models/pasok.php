<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pasok extends Model
{
    use HasFactory;
    protected $table = "pasok";
    protected $primaryKey = "id";
    public $incrementing=true;


    protected $guarded=[];
}
