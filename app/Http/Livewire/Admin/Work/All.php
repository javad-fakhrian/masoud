<?php

namespace App\Http\Livewire\Admin\Work;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithPagination;

class All extends Component
{
    use WithPagination;

    public $search;

    public $readyToLoad = false;

    public function loadUsers()
    {
        $this->readyToLoad = True;
    }

    public function deleteWork($id)
    {
        $thisWork = Work::find($id);
        $thisWork->delete();
    }

    public function activeStatus($id)
    {
        $thisWork = Work::find($id);
        $thisWork['status'] = 1;
        $thisWork->update();
    }

    public function disableStatus($id)
    {
        $thisWork = Work::find($id);
        $thisWork['status'] = 0;
        $thisWork->update();
    }

    public function render()
    {
        $works = Work::where('description' , 'LIKE' , "%{$this->search}%")->orWhere('url' , 'LIKE' , "%{$this->search}%" )->latest()->paginate(40) ;
        return view('livewire.admin.work.all' , compact('works'))->layout('layouts.admin');
    }
}
