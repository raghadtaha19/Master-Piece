<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'sell_form_id',
    ];
    public function buyer()
    {
        return $this->belongsTo(User::class, 'buyer_id');
    }

    public function landReservation()
    {
        return $this->belongsTo(LandReservation::class, 'land_id');
    }
}
