<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasOne('App\Models\User','user_id');
    }     

    public function items()
    {
        return $this->hasMany('App\Models\OrderItem','order_id');
    }     
}
