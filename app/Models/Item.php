<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'filename',
        'price',
        'category_id'
    ];

    public function category()
    {
       return $this->belongsTo(Category::class);
    }

    public function usersCart()
    {
        return $this->belongsToMany(User::class, 'carts');
    }

    public function cart() {
        return $this->belongsTo(Cart::class, 'carts');
    }

    // public function usersOrders()
    // {
    //     return $this->belongsTo(User::class, 'orders');
    // }

    // public function order()
    // {
    //     $this->belongsTo(Order::class);
    // }
}
