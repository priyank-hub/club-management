<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membermst extends Model
{
    use HasFactory;
    protected $table="membermsts";
    protected $fillabel = ['id','memebername','password','address','city','pincode','contactno','email','membershipid'];
}
