<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rental_agency_id','manufacturer', 'mode', 'year','chassi','status_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
  
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function rental_agency(){
    	return $this->belongsTo('App\RentalAgency');
    }


}
