<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rental extends Model
{

    protected $fillable = ['vehicle_id','user_id','value','status','return_date'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function vehicle(){
    	return $this->belongsTo(Vehicle::class);
    }
}
