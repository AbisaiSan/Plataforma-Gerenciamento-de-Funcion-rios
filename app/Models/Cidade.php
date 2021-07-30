<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;

    protected $fillable = ['estado_id','name'];
    //country
    public function estado(){
        return $this->belongsTo(Estado::class);
    }

    public function cities(){
        return $this->hasMany(Cidade::class);
    }
}
