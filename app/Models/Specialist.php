<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Specialist extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    } 

    public function type()
    {
        return $this->belongsTo('App\Models\SpecialistType','type_id');
    }

    public function ratings()
    {
        return $this->morphMany('App\Models\Rating', 'ratable');
    }    
  
    public function appointments()
    {
        return $this->morphMany('App\Models\Appointment', 'appointable');
    }        
}
