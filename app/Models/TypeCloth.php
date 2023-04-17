<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeCloth extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function detailLaundry()
    {
        return $this->hasMany(DetailLaundry::class);
    }

    public function totalPrice()
    {
        return $this->hasMany(TotalPrice::class);
    }
}
