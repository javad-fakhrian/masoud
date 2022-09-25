<?php

namespace App\Http\Livewire\Admin\Work;

use App\Models\Work;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;
    
    public Work $work;

    public $file ;

    public $type;

    public $description;

    public function mount()
    {
        $this->type = $this->work->type;
        $this->description = $this->work->description;
    }

    public function EditWork()
    {
        if($this->file){
            $uplodedFile = $this->file->store('files', 'work');
            $this->work['url'] = '/work/'.$uplodedFile;
        }

        $this->work['description'] = $this->description;
        $this->work['type'] = $this->type;

        $this->work->update();

        return redirect(route('admin.work.all'));
    }

    public function render()
    {
        return view('livewire.admin.work.edit')->layout('layouts.admin');
    }
}
