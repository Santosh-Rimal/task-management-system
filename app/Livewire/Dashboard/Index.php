<?php

namespace App\Livewire\Dashboard;

use App\Models\Task;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\On;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    public $totaltasks,$totalusers,$totalroles,$totalpermissions,$inprogess,$todo,$done,$admin;
    public function render()
    {
        return view('livewire.dashboard.index');
    }
    
    public function mount()
    {
        $this->totaltasks=Task::count();
        $this->totalusers=User::count();
       $this->admin = User::whereHas('roles', function ($query) {
       $query->where('role', 'admin');
       })->count();
        $this->totalroles=Role::count();
        $this->totalpermissions=Permission::count();
        $this->todo=Task::where('ststus','todo')->count();
        $this->inprogess=Task::where('ststus','inprogess')->count();
        $this->done=Task::where('ststus','done')->count();
        
    }
    #[On('dashboardpermissions')]
    public function dashboardpermissions($name){
        dd($name);
    }

      #[On('dashboardrole')]
      public function dashboardrole($name){
      dd($name);
      }

}