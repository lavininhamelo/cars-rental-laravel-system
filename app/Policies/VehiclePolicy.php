<?php

namespace App\Policies;

use App\User;
use App\Vehicle;
use App\Profile;
use Illuminate\Auth\Access\HandlesAuthorization;

class VehiclePolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    private function full_acess($permission){
       return $permission == 'Full_access';
    } 
    public function create(){
        $user_profile = auth()->user()->profile;
        $permissions = $user_profile->permissions;

        foreach ($permissions as $permission => $value) {
            if($this->full_acess($value['name'])){
                return true;
            }elseif ($value['name'] == 'Vehicle_Create') {
                return true;
            }
        }
        return false;
    }
}
