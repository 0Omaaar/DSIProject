<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainee extends Model
{
    use HasFactory;

    protected  $fillable = [
        'nom', 
        'prenom', 
        'telephone', 
        'email', 
        'domaine',
        'date_debut',
        'ville',
        'formation',
        'age',
        'date_fin',
        'adresse',
    ];
}