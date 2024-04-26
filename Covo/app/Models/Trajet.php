<?php

namespace App\Models;

use App\Models\User;
use App\Models\Ville;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Trajet extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function ville()
    {
        return $this->belongsTo(Ville::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
}
