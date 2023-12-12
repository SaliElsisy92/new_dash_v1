<?php
namespace App\Policies;
use Dash\Policies\Policy;

class AllActionsPolicy extends Policy {



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
        return false;
    }

	public function show(){
        return false;
    }
	public function delete(){
        return false;
    }
}