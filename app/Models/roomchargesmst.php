<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class roomchargesmst extends Model
{
    use HasFactory;
    protected $table = "roomchargesmsts";
    protected $fillabel = ['id','roomtype','charges','noofrooms','description','photo1','photo2','photo3']; 
}