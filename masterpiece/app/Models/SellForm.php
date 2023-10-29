<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SellForm extends Model
{
    use HasFactory;
    // public $timestamps = false;
    protected $fillable = [
        'ID_number',
        'land_type',
        'governorate',
        'directorate',
        'village',
        'basin',
        'district',
        'piece_number',
        'area',
        'price',
        'description',
        'additional_information',
        'user_id',
        'sell_form_id',
    ];
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }

    public function landImages()
    {
        return $this->hasOne(LandImages::class);
    }

    public function landCard()
    {
        return $this->hasOne(LandCard::class);
    }
}
