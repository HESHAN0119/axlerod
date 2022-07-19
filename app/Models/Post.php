<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = [];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post_type () {
        return $this->belongsTo(PostType::class);
    }

    public function vehicle_type () {
        return $this->belongsTo(VehicleType::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }

}
