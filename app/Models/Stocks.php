<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stocks extends Model
{
    use HasFactory;
    protected $fillable = ([
        'category_id',
        'part_name',
        'quantity'	,
        'price'	,
        'supplier',
        'description'
    ]);
}
