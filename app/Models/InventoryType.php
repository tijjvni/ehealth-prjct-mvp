<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryType extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function inventories()
    {
        return $this->hasMany('App\Models\Inventory','type_id');
    } 
}
