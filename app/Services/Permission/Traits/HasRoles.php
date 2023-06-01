<?php

namespace App\Services\Permission\Traits;


use App\Models\Role;


trait HasRoles
{

    public function roles()
    {
        return $this->belongsToMany(Role::Class);
    }

    public function withdrawRolesTo(...$roles)
    {
        $roles = $this->getAllRoles($roles);
        $this->roles()->detach($roles);
        return $this;
    }

    public function giveRolesTo(...$roles)
    {
        $roles = $this->getAllRoles($roles);
        if ($roles->isEmpty()) return $this;
        $this->roles()->syncWithoutDetaching($roles);
        return $this;
    }

    private function getAllRoles(array $roles)
    {
        return Role::whereIn('name', $roles)->get();
    }

    public function hasRole($role)
    {

        return $this->roles->contains('name', $role);
    }
}
