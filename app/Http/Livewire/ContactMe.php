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
    public string $locale = 'en';

    protected $rules = [
        'email' => 'required|email',
        'name' => 'required',
        'message' => 'required|min:20',
    ];

    public function mount(string $locale)
    {
        $this->locale = $locale ?? 'en';
    }

    protected function getMessages(): array
    {
        return [
            'email.*' => trans('contact-me.validation.email', [], $this->locale),
            'name.*' => trans('contact-me.validation.name', [], $this->locale),
            'message.*' => trans('contact-me.validation.message', [], $this->locale),
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitForm()
    {
        $details = $this->validate();

        Mail::to(config('mail.from.address'))
            ->send(new ContactFormMailable($details));

        $this->successMessage = trans('contact-me.success', [], $this->locale);

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
