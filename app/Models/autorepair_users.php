<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repairs;


class autorepair_users extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'phone',
        'position',
        'salary_amount',
        'hire_date',
        'status',
        'image'
    ];

    public function repairs(){
    return $this->hasMany(Repairs::class, 'assigned_to');
    }
    // AutorepairUser.php
    // AutorepairUser.php




}
