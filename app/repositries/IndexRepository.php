<?php

namespace App\repositries;

use App\Interfaces\IndexInterface;

class IndexRepository implements IndexInterface
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }

    public function permissions()
    {
        return view('permission.index');
    }

    public function roles()
    {
        return view('role.index');
    }
    public function tasks()
    {
        return view('task.index');
    }

    public function users()
    {
        return view('user.index');
    }

}