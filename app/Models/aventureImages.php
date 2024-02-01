<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// Modèle AventureImages

class AventureImages extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'images',
    ];

    public function aventure()
    {
        return $this->belongsTo(Aventure::class, 'id_aventure');
    }
}





