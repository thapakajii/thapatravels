<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class travelPackage extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'description', 'price'];
}
