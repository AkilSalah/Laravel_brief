<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aventure extends Model
{
    use HasFactory;
    protected $with = ["user", "images"];

    protected $fillable = [
        'id_users',
        'ville',
        'paye',
        'continent',
        'description',
        'conseils'
    ];

    public function user()
    {
        return $this->belongsTo(User::class,'id_users');
    }

    public function images()
{
    return $this->hasMany(AventureImages::class,'id_aventure');
}
}

