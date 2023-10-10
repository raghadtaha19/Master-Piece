<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'governorate',
        'district',
        'piece_number',
        'basin_number',
        'sell_form_id',
    ];
    public function sellForm()
    {
        return $this->belongsTo(SellForm::class);
    }
}
