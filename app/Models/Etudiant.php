<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Etudiant 
 * 
 * Table Name:    etudiants 
 * Primary Key:   id 
 */
class Etudiant extends Model {

    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nom', 
        'naissance', 
        'email', 
        'phone', 
        'adresse', 
        'ville_id', 
    ];

}
