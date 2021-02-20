<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
       'ename','dis','stime','etime','cat','filenames'
   ];

   public function setFilenamesAttribute($value)
   {
       $this->attributes['filenames'] = json_encode($value);
   }
}