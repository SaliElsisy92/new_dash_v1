<?php
namespace App\Policies;
use Dash\Policies\Policy;

class AdminGroupsRolesPolicy extends Policy {
	protected $resource = 'admin_group_roles';
}