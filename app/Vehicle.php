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
        'rental_agency_id', 'manufacturer', 'model', 'year', 'chassi', 'status_id', 'color', 'description', 'image', 'license_plate', 'value'
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

    public function status(){
        return $this->belongsTo(StatusVehicle::class);
    }

    public function rental_agency()
    {
        return $this->belongsTo(RentalAgency::class);
    }

    public function user(){
        return $this->belongsToMany(User::class); 
    }

    public function rental(){
        return $this->hasMany(Rental::class);
    }
}
