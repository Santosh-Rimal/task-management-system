<?php

namespace App\Http\Controllers;

use App\Interfaces\IndexInterface;
use App\interfaces\permisson\PermissionInterface;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __construct(public IndexInterface $index)
    {
        
    }

    
    public function permissions()
    {
        return $this->index->permissions();
    }

    public function roles()
    {
        // return view('role.index');
        return $this->index->roles();
    }

    public function tasks()
    {
        return $this->index->tasks();
    }

    public function users()
    {
        return $this->index->users();
    }
}