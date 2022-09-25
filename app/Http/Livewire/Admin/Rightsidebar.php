<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Rightsidebar extends Component
{
    public $active ; 
    
    public function render()
    {
        return view('livewire.admin.rightsidebar');
    }
}
