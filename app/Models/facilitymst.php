<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class facilitymst extends Model
{
    use HasFactory;
    protected $table="facilitymsts";
    protected $fillabel=['id','facilityname','description','charges','photo'];
}