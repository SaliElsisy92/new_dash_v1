<?php
namespace App\Policies;
use Dash\Policies\Policy;
use Illuminate\Auth\Access\HandlesAuthorization;

class showCustom extends Policy {


	Use HandlesAuthorization ;
    public function viewAny(){
        return true;
    }
    public function create(){
        return true;
    }
    public function index(){
        return true;
    }
    public function update(){
        return true;
    }

	public function show(){
        return false;
    }
	public function delete(){
        return true;
    }
}
