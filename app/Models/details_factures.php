<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Factures;
use App\Models\Stocks;


class details_factures extends Model
{
    use HasFactory;
    protected $fillable = [
        'facture_id',
        'part_id',
        'part_name',
        'quantity',
        'unit_price',
        'total_price'
    ];
    
    public function facture()
{
    return $this->belongsTo(Factures::class, 'facture_id');
}
public function piece()
{
    return $this->belongsTo(Stocks::class); 
    // Adjust 'stock_id' to your actual foreign key in details_factures table pointing to stock/parts table
}

    
}
