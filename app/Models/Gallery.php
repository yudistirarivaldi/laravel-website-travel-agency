<?php

namespace App\Models;

use App\Models\TravelPackages;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'travel_packages_id', 'image'
    ];

    public function travel_package() {
        return $this->belongsTo(TravelPackages::class, 'travel_packages_id', 'id');
    }
}
