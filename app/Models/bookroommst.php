<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bookroommst extends Model
{
    use HasFactory;
    protected $table = "bookroommsts";
    protected $fillabel = ['id','roomid','memberid','roomtype','bookingdate','checkin','checkout','noofrooms','adults','children','infants','status','extrabed','extrafacility','extracharges','pdcharges','totalcharges'];
}