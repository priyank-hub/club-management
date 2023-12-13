<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membershiptypemst extends Model
{
    use HasFactory;
    protected $table = "membershiptypemsts";
    protected $fillabel = ['id','type','noofyear','charges'];
}
