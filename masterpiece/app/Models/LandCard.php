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
        'sell_form_id',
       'description',
       'additional_information'

    ];
   
    public function sellForm()
{
    return $this->belongsTo(SellForm::class, 'sell_form_id');
}

    public function landReservations()
    {
        return $this->hasMany(LandReservation::class);
    }

    public function landImages()
    {
        return $this->hasMany(LandImages::class, 'land_card_id');
    }
 

}
