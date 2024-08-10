<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposition extends Model
{

    use HasFactory;

    /**
     * Les attributs qui sont assignables.
     *
     * @var array
     */
    protected $fillable = [
        'theme',
        'users_id',
    ];

    /**
     * Obtenir l'utilisateur qui a proposé ce sujet.
     */
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}

