<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producao extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at'];
    protected $fillable = ['quantPerfume', 'quantAgua', 'quantAlcool', 'quantFragrancia'];
    //protected $table = 'producoes'; 
}
