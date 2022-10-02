<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konular extends Model
{
    use HasFactory;
    protected $table='konular';
    protected $fillable=['title','contents'];
}
