<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factures;
use App\Models\autorepair_users;

class Repairs extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'client_name',
        'client_phone',
        'model',
        'brand',
        'license_plate',
        'status_code',
        'description',
        'status',
        'assigned_to',
        'started_at',
        'finished_at'

    ];
 
    public function user()
{
    return $this->belongsTo(autorepair_users::class, 'assigned_to');
}

public function facture()
{
    return $this->hasOne(Factures::class, 'repair_id');
}
 
    
}
