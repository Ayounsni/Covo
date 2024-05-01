<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\Cin;
use App\Models\Trajet;
use App\Models\Evaluation;

use App\Models\Reservation;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom',
        'email',
        'password',
        'prenom',
        'naissance',
        'telephone',
        'password',
        'photo',
        'bannir',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function trajet()
    {
        return $this->hasMany(Trajet::class);
    }
    public function cin()
    {
        return $this->hasOne(Cin::class);
    }
    public function voiture()
    {
        return $this->hasOne(Voiture::class);
    }
        public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    public function evaluation()
    {
        return $this->hasMany(Evaluation::class);
    }

}
