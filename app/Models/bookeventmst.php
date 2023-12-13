<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookeventmst extends Model
{
    use HasFactory;
    protected $table = "bookeventmsts";
    protected $fillabel = ['id','eventid','memberid','noofmember'];
}