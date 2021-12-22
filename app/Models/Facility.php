<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Facility extends Model
{
    use HasFactory;

    protected $unguarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

    public function type()
    {
        return $this->belongsTo('App\Models\FacilityType','type_id');
    }    
 
    public function openings()
    {
        return $this->hasMany('App\Models\Opening','facility_id');
    }    

    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'ratable');
    }      

    public function appointments()
    {
        return $this->morphMany('App\Models\Appointment', 'appointable');
    }    

    public function inventories()
    {
        return $this->hasMany('App\Models\Inventory','facility_id');
    } 
}
