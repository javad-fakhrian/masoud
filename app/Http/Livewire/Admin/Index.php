<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;

    public $readyToLoad = false;

    public function loadUsers()
    {
        $this->readyToLoad = True;
    }

    public function deleteUser($id)
    {
        $user = User::find($id);
        $user->delete();
    }

    public function render()
    {
        $users = User::where('email' , 'LIKE' , "%{$this->search}%")->orWhere('name' , 'LIKE' , "%{$this->search}%" )->latest()->paginate(40) ;
        return view('livewire.admin.index' ,compact('users'))->layout('layouts.admin');
    }
}
