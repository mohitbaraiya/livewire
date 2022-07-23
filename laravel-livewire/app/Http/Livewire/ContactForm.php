<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Validation\Validator;

class ContactForm extends Component
{

    public $name;
    public $email;
    public $phone;
    public $message;  


    public function updated($fields){

              $this->validateOnly($fields,[

                'name' => 'required|min:6',
                'email' => 'required|email',
                'phone' =>'required|max:10',
                'message'=>'required|min:11',

              ]);
          


    }
    public function submitForm(){

    $this->validate([
        'name' => 'required|min:6',
        'email' => 'required|email',
        'phone' =>'required|max:10',
        'message'=>'required|min:11',
        ]);

        dd($this->name,$this->email,$this->phone,$this->message);
    }
 
    public function render()
    {
        return view('livewire.contact-form');
    }
}
