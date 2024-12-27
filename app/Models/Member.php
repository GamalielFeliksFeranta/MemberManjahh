<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
class Member extends Model
{
    protected $fillable = [
        'name',
        'email',
    ];
}
