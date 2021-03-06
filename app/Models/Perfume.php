<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perfume extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'updated_at', ];
    protected $fillable = ['nome', 'percentAgua','percentAlcool', 'percentFragrancia','fragrancias','totalProduzido'];
   // protected $table = 'perfumes'; 
}
