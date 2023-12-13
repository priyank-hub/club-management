<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqmst extends Model
{
    use HasFactory;
    protected $table = "faqmsts";
    protected $fillabel = ['id','question','answer'];
}
