<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Repairs;
use App\Models\details_factures;

use App\Models\autorepair_users;

class Factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'repair_id',
        'date_issued',
        'total_parts',
        'service',
        'total_amount',
        'payment_status',
        'paid'
        
    ];
    

    
public function repairs()
{
    return $this->belongsTo(Repairs::class, 'repair_id');
}
public function details()
{
    return $this->hasMany(details_factures::class,'facture_id');
}

public function autorepair_users()
    {
        return $this->belongsTo(autorepair_users::class, 'client_id'); 
        // Adjust 'client_id' to your actual foreign key in factures table
    }




}
