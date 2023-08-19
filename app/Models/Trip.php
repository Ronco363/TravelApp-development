<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trip extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'tipologia',
        'durata',
        'distanza',
        'altitudine',
        'immagine'
    ];

    public function TourGuide()
    {
        return $this->belongsTo(TourGuide::class, 'guida_id','id');
    }
}
