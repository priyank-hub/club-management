<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class teammst extends Model
{
    use HasFactory;
    protected $table = "teammsts";
    protected $fillabel = ['id','name','post','description','photo'];
}
