<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name', 'email', 'weight','available','category','tags','descriptions','image','thumbnail_1','thumbnail_2','thumbnail_3','thumbnail_4','thumbnail_5',
    ];

}
