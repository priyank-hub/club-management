<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eventmst extends Model
{
    use HasFactory;
    protected $table="eventmsts";
    protected $fillabel=['id','eventname','fromdate','todate','starttime','endtime','charges','description','photo'];
}
