<?php

namespace App\Policies;

//use App\Models\User;

use Illuminate\Auth\Access\HandlesAuthorization;

class Custom
{
    /**
     * Create a new policy instance.
     */
//    public function __construct()
//    {
//        //
//    }
Use HandlesAuthorization ;
    public function viewAny(){
        return true;
    }
    public function create(){
        return false;
    }
    public function index(){
        return true;
    }
    public function update(){
        return true;
    }
}
