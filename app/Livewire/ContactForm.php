<?php

namespace App\Livewire;

use Livewire\Component;
use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;


class ContactForm extends Component
{

    public $name;
    public $email;
    public $tel;
    public $content;

    public $successMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'tel' => ['required', 'regex:/^\+?[0-9]+$/'],
        'content' => 'required',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly(($propertyName));
    }

    public function submitForm()
    {

        $contact = $this->validate();

        Mail::send('emails.contact-form-email',
        array(
            'name' => $this->name,
            'email' => $this->email,
            'tel' => $this->tel,
            'content' => $this->content,
            
            ),
            function($message){
                $message->from(env('MAIL_USERNAME'));
                $message->to(env('MAIL_TO'))
                    ->subject('Nowa wiadomość ze strony gorskiraj.pl');
            }
        );
       

        $this->successMessage = 'Dziękujemy za wiadomość! Odpowiemy najszybciej jak to możliwe!';

        $this->resetForm();

        session()->flash('success_message', $this->successMessage);
    }

    public function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->tel = '';
        $this->content = '';
    }

    public function render()
    {

        return view('livewire.contact-form');
    }
}
