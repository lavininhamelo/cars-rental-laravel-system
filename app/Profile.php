<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;
    public $table = 'profiles';
    protected $fillable = ['name','description'];

    public function users(){
    	return $this->hasMany(User::class);
    }

    public function permissions(){
    	return $this->belongsToMany(Permission::class);
    }
}
