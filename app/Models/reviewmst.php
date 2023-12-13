<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reviewmst extends Model
{
    use HasFactory;
    protected $table = "reviewmsts";
    protected $fillabel = ['id','name','email','feedback'];
}
