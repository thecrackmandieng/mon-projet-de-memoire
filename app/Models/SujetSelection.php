<?php

// app/Models/SujetSelection.php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SujetSelection extends Model
{
    protected $fillable = ['user_id', 'sujet_id','theme', 'validated','status'];

    // Relation avec l'utilisateur qui a fait la sélection
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Relation avec le sujet choisi
    public function sujet()
    {
        return $this->belongsTo(Sujet::class);
    }


}
