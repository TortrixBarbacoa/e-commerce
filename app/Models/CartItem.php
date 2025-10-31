<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $user_id
 * @property int $producto_id
 * @property int $quantity
 * @property float $price
 * @property float $total
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 */
class CartItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'producto_id',
        'quantity',
        'price'
    ];

    /**
     * Get the user that owns the cart item.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the producto that owns the cart item.
     */
    public function producto()
    {
        return $this->belongsTo(Producto::class);
    }

    /**
     * Get the total price for this cart item.
     */
    public function getTotalAttribute()
    {
        return $this->quantity * $this->price;
    }
}
