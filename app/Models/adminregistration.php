<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class adminregistration extends Model
{
    use HasFactory;
    protected $table = "adminregistrations";
    protected $fillabel = ['id','name','email','password','contactno','photo'];
}
