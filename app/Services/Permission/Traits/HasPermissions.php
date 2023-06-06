<?php

namespace App\Services\Permission\Traits;

use App\Models\Permission;
use Illuminate\Support\Arr;


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

    public function refreshPermission(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        $this->permissions()->sync($permissions);
        return $this;

    }

    private function getAllPermissions(array $permissions)
    {
        $permissions = arr::flatten($permissions);
        try {
            return Permission::whereIn('name', $permissions)->get();
        } catch (\Exception $e) {
            return [];
        }

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
