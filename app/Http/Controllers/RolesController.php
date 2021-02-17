<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RolesController extends Controller
{
    public function index()
    {
        $roles = role::all();
        return view('roles.all', compact('roles'));
    }

    public function show(role $role)
    {
        return view('roles.show', compact('role'));
    }

}