<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cancellationrulemst extends Model
{
    use HasFactory;
    protected $table = "cancellationrulemsts";
    protected $fillabel = ['id','rules','noofdays','refundrate'];
}
