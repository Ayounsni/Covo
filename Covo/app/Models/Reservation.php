<?php

namespace App\Models;

use App\Models\User;
use App\Models\Trajet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'trajet_id',
        'place',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function trajet()
    {
        return $this->belongsTo(Trajet::class);
    }
}
