<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'descripcion',
        'imagen'
    ];

    public function producto(){
        return $this->hasMany(Producto::class);
    }

}
