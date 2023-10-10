<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandCard extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'image',
        'land_type',
        'price',
        'governorate',
        'district',
        'area',
        'number_of_images',
        'sell_form_id',
        'status_from_user',
        'status_from_admin',
    ];
    protected $attributes = [
        'status_from_user' => 0, // or any other default value you prefer
        'status_from_admin'=> 0,

    ];
    public function sellForm()
    {
        return $this->belongsTo(SellForm::class);
    }

    public function landReservations()
    {
        return $this->hasMany(LandReservation::class);
    }
 

}
