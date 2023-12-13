<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class membershipmst extends Model
{
    use HasFactory;
    protected $table = "membershipmsts";
    protected $fillabel = ['id','name','mstypeid','noofdependant','joiningdate','expirydate'];
}
