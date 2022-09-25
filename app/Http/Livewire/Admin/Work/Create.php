<?php

namespace App\Http\Livewire\Admin\Work;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $file ;
    public $description ;
    public $type = "pic";

    public Work $work;

    public function mount(){
        $this->work = new Work();
    }

    protected $rules = [
        'file'          => 'required' , 
        'type'          => 'required' ,
        'description'   => 'required'
    ];

    public function updated($name)
    {
        $this->validateOnly($name);
    }

    public function CreateWork()
    {
        
        $this->validate();
        $uplodedFile = $this->file->store('files', 'work');
        $this->work['url'] = '/work/'.$uplodedFile;
        $this->work['description'] = $this->description;
        $this->work['type'] = $this->type;
        $this->work->save();

        return redirect(route('admin.work.all'));
    }

    public function render()
    {
        return view('livewire.admin.work.create')->layout('layouts.admin');
    }
}
