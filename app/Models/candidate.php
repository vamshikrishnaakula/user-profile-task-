<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class candidate extends Model
{
   protected $table = 'candidates';
   public $timestamps = false;
   protected $fillable = [
    'id',
    'name',
    'fathername',
    'address'
];
}
