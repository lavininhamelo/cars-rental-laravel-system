<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RentalAgency extends Model
{

    protected $fillable = [
        'id','name','city','state','country','location','CNPJ'
    ];

    public function vehicle()
    {
        return $this->hasMany(Vehicle::class);
    }

    public function getRentalAgency($id){
        $agency = RentalAgency::where('id', '=', $id);
        return $agency;
    }
}
