<?php

namespace App\Policies;

use App\User;
use App\Rental;
use Illuminate\Auth\Access\HandlesAuthorization;

class RentalPolicy
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
       return $permission == 'Full_access' ;
    } 

    public function alter_by_client(){
        $user_profile = auth()->user()->profile;
        $permissions = $user_profile->permissions;

        foreach ($permissions as $permission => $value) {
            if($this->full_acess($value['name'])){
                return true;
            }elseif ($value['name'] == 'Rent_Update_part') {
                return true;
            }
        }
        return false;
    }
    public function alter_status(){
        $user_profile = auth()->user()->profile;
        $permissions = $user_profile->permissions;

        foreach ($permissions as $permission => $value) {
            if($this->full_acess($value['name'])){
                return true;
            }elseif ($value['name'] == 'Rent_Update') {
                return true;
            }
        }
        return false;
    }

}
