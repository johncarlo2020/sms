<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class part extends Model
{
    use HasFactory;

    protected $table = 'parts';

     protected $fillable = [
        'name', 'section_id'
    ];
}
