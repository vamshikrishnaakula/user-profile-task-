<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class certificate extends Model
{   
    
    protected $table = 'certificates';
    public $timestamps = false;
    use HasFactory;
}
