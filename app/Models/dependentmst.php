<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dependentmst extends Model
{
    use HasFactory;
    protected $table="dependentmsts";
    protected $fillabel=['id','name','membershipid','relation','birthdate'];
}
