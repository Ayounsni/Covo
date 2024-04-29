<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Evaluation extends Model
{
    use HasFactory;

    protected $fillable = [
        'userS_id',
        'userR_id',
        'note',
        'commentaire',
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'userS_id');
    }
}
