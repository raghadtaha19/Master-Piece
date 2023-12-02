<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LandImages extends Model
{
    use HasFactory;
    // public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'image1',
        'image2',
        'image3',
        'image4',
        'sell_form_id',
        'land_card_id',
    ];
    public function sellForm()
    {
        return $this->belongsTo(SellForm::class);
    }
    public function landCard()
    {
        return $this->belongsTo(LandCard::class, 'land_card_id');
    }
}
