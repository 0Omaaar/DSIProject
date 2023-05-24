<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected  $fillable = [
        'sujet_offre', 
        'prenom', 
        'domaine_offre', 
        'profil_requis', 
        'duree_stage',
        'lieu_stage',
        'description_stage',
        'mode_stage',
    ];
}
