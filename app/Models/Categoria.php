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

    /**
     * Get the image URL - handles both local and external URLs
     */
    public function getImageUrlAttribute()
    {
        // If the image starts with http, it's an external URL
        if (str_starts_with($this->imagen, 'http')) {
            return $this->imagen;
        }
        
        // Otherwise, it's a local file
        return asset('uploads/' . $this->imagen);
    }
}
