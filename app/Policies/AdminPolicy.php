<?php
namespace App\Policies;
use Dash\Policies\Policy;

class AdminPolicy extends Policy {
	protected $resource = 'Admins';
}