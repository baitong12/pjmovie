<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', // เพิ่มฟิลด์ title ที่นี่
        // เพิ่มฟิลด์อื่นๆ ที่ต้องการให้สามารถทำ mass assignment ได้ เช่น:
        'director',
        'release_year',
        'genre',
        'synopsis',
    ];
}
