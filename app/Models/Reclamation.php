<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reclamation extends Model
{
    use HasFactory;
    protected $fillable = ['type','matriculeEtud','nomEtud','preEtud','annee','filliere','ue','fiche','quittance','carte'];

}
