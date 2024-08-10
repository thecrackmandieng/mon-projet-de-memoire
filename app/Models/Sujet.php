<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Sujet extends Model
{
    use HasFactory;

    protected $fillable = [
        'theme', 'confirme', 'validated', 'user_id','description',
    'profile'
    ];
    public function sujetSelections()
    {
        return $this->hasMany(SujetSelection::class);
    }
    public function propositions()
    {
        return $this->hasMany(Proposition::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function selections()
    {
        return $this->hasMany(SujetSelection::class);
    }

}

