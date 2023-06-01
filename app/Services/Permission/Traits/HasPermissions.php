<?php

namespace App\Services\Permission\Traits;

use App\Models\Permission;


trait HasPermissions
{

    public function permissions()
    {
        return $this->belongsToMany(Permission::Class);
    }

    public function withdrawPermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->detach($permissions);
        return $this;
    }

    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) return $this;
        $this->permissions()->syncWithoutDetaching($permissions);
        return $this;
    }

    private function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', $permissions)->get();
    }

    public function hasPermission(Permission $permission)
    {
       return $this->hasPermissionThroughRoles($permission) || $this->permissions->contains($permission);


    }

    protected function hasPermissionThroughRoles(Permission $permission)
    {

        foreach ($permission->roles as $role) {
            if ($this->roles->contains($role)) return true;
        }
        return false;

    }
}
