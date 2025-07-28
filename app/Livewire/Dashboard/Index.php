<?php

namespace App\Livewire\Dashboard;

use Livewire\Component;
use Livewire\Attributes\On;

class Index extends Component
{
    public function render()
    {
        return view('livewire.dashboard.index');
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