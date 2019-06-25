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

    public static function getRentals(){
		$rentals = Rental::latest()->paginate();
        $user = auth()->user();
        if($user->profile->name == 'Cliente'){
            $rentals = Rental::where('user_id', '=',$user->id)->paginate();
        }
        return $rentals;
    }
}
