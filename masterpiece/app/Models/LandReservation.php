<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandReservation extends Model
{
    use HasFactory;
    // public $timestamps = true;
    protected $fillable = [
        'user_id',
        'land_card_id',
        'status',
        'reservation_date',
        'available_land_message',
        'sold_land_message',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function landCard()
    {
        return $this->belongsTo(LandCard::class);
    }

}
