<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class AbilitiesRoleController extends Controller
{
    public function assignAbility(Request $request, Role $role)
    {   
        $role->abilities()->attach($request->abilities);

        return redirect('admin/roles');
    }
}