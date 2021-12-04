<?php

namespace App\Http\Livewire;

use App\Mail\ContactFormMailable;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ContactMe extends Component
{
    public string $email = '';
    public string $name = '';
    public string $message = '';
    public string $successMessage = '';

    protected $rules = [
        'email' => 'required|email',
        'name' => 'required',
        'message' => 'required|min:20',
    ];

    protected $messages = [
        'email.*' => 'Please enter a valid email address.',
        'name.*' => ' Please enter your name (or how you wished to be called).',
        'message.*' => "That's a bit short, tell me more.",
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $details = $this->validate();

        Mail::to(config('mail.from.address'))
            ->send(new ContactFormMailable($details));

        $this->successMessage = 'Thank you for reaching out! I will get back to you as soon as possible';

        $this->resetForm();
    }

    private function resetForm()
    {
        $this->name = '';
        $this->email = '';
        $this->message = '';
    }

    public function render()
    {
        return view('livewire.contact-me');
    }
}
