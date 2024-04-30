<?php

namespace App\Models;

use App\Models\Trajet;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ville extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
    ];

    public function trajet()
    {
        return $this->hasMany(Trajet::class);
    }
}
