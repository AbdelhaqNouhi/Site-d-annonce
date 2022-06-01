<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;
    protected $fillable = ['nom', 'prenome', 'email', 'password'];


    public function demandes()
    {
        return $this->hasMany(Demande::class, 'user_id');
    }

    public function offres()
    {
        return $this->hasMany(Offre::class , 'user_id');
    }
}
