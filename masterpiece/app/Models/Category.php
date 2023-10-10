<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  
    use HasFactory;
    public $timestamps = false; // Disable timestamps
    protected $fillable = [
        'name',
        'image',
    ];
    public function sell_forms()
    {
        return $this->hasMany(SellForm::class);
    }

}
