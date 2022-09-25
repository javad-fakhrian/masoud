<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Contact;

class Contactus extends Component
{
    use WithPagination;

    public $search;

    public $readyToLoad = false;

    public $showContact = false;

    public $showContactValue ;



    public function loadContacts()
    {
        $this->readyToLoad = True;
    }

    public function deleteContact($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
    }

    public function activeShowContact($id)
    {
        $contact = Contact::find($id);
        $this->showContact = true;
        $this->showContactValue = $contact;
    }

    public function render()
    {
        $contacts = Contact::where('email' , 'LIKE' , "%{$this->search}%")->orWhere('name' , 'LIKE' , "%{$this->search}%" )->orWhere('description' , 'LIKE' , "%{$this->search}%" )->orWhere('phone' , 'LIKE' , "%{$this->search}%" )->latest()->paginate(40) ;
        return view('livewire.admin.contactus' , compact('contacts'))->layout('layouts.admin');
    }
}
