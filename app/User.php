<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'profile_id','rental_agency_id','name', 'email','password','CPF','CEP','CNH',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile(){
        return $this->belongsTo(Profile::class, 'profile_id','id');
    }

    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }

    public function vehicle(){
        return $this->belongsToMany(Vehicle::class); 
    }

    public function rental(){
        return $this->hasMany(Rental::class);
    }
}
