<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'user_id',
        // 'transaction_price',
        // 'transaction_date',
     'land_card_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function landReservation()
    {
        return $this->belongsTo(LandReservation::class, 'land_card_id');
    }
}
