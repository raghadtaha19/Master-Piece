<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FrontSellForm extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'lastName',
        'idNumber',
        'phone',
        'land_type',
        'governorate',
        'directorate',
        'village',
        'basin',
        'district',
        'pieceNumber',
        'area',
        'price',
        'description',
        'additionalInfo',
    ];


}
