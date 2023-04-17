<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DurationLaundry extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function laundry()
    {
        return $this->hasMany(Laundry::class);
    }

    public function totalPrice()
    {
        return $this->hasMany(TotalPrice::class);
    }
}
