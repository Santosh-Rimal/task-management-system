<?php

namespace App\Livewire\Permission;

use Flux\Flux;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;

    public $id, $ID;

    public function render()
    {
        return view('livewire.permission.index', [
            'permissions' => Permission::where('name', '!=', 'Super Admin')->paginate(10),
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('editPermission', $id);
    }

    #[On('permissionCreated')]
    public function permissionCreated($message)
    {
           $this->dispatch('dashboardpermissions',Auth::user()->name);
        session()->flash('success', $message);
    }

    #[On('permissionUpdated')]
    public function permissionUpdated($message)
    {
        session()->flash('success', $message);
    }

    public function delete($ID)
    {
        $this->id = $ID;
        Flux::modal('delete-permission')->show();
    }

    public function deletePermission()
    {
        Permission::where('id', $this->id)->delete();
        $this->dispatch('permissionDeleted', 'Permission deleted successfully.');
        Flux::modal('delete-permission')->close();
    }

    #[On('permissionDeleted')]
    public function permissionDeleted($message)
    {
        session()->flash('delete', $message);
        $this->resetId();
    }

    public function resetId()
    {
        $this->id = '';
        $this->ID = '';
    }

    public function show($id)
    {
        $this->dispatch('showPermission', $id);
    }
}