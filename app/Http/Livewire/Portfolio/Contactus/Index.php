<?php

namespace App\Http\Livewire\Portfolio\Contactus;

use Livewire\Component;
use App\Models\Contact;

class Index extends Component
{
    public Contact $contact;

    public $description;
    public $phone;
    public $email;
    public $name;

    public function mount(){
        $this->contact = new Contact();
    }

    protected $rules = [
        'contact.name' => 'required',
        'contact.phone' => 'required',
        'contact.email' => 'required',
        'contact.description' => 'required',
    ];

    public function CreateContactus()
    {
        $this->validate();
        $this->contact->save();
        return redirect()->route('main');
    }

    public function render()
    {
        return view('livewire.portfolio.contactus.index')->layout('layouts.contact');
    }
}
