<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ppl extends Model
{
    use HasFactory;
    protected $fillable = [
       'name','ppl','event'   ];
}
