<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;

    protected $fillable = ['codigo_pais', 'name'];
                    //states
    public function estados(){
        return $this->hasMany(Estado::class);
    }
}
