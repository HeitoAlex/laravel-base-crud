<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;
    use SoftDeletes;

    //se il nome della table è al singolare invece che al plurale (quindi sbagliato) si può utilizzare
    // protected $table = "nome_tabella_corretto";

    protected $fillable = [
        'name',
        'class',
        'order',
        'family',
        'diet',
        'habitat'
    ];
}
