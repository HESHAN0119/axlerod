<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GarageProfile extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function vehicle_types () {
        return $this->belongsToMany(VehicleType::class);
    }

    public function user () {
        return $this->hasOne(User::class);
    }
}
