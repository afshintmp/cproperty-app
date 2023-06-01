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
        dd($this->permissions()->detach($permissions));
    }

    public function givePermissionsTo(...$permissions)
    {
        $permissions = $this->getAllPermissions($permissions);
        if ($permissions->isEmpty()) return $this;
        dd($this->permissions()->syncWithoutDetaching($permissions));
    }

    private function getAllPermissions(array $permissions)
    {
        return Permission::whereIn('name', $permissions)->get();
    }

    public function hasPermission(Permission $permission)
    {
        dd($permission);
        return $this->permissions->contains($permission);
    }
}
