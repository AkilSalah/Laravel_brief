<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class AventureImages extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'image',
        'id_aventure'
    ];

    public function aventure()
    {
        return $this->belongsTo(Aventure::class, 'id_aventure');
    }
}






