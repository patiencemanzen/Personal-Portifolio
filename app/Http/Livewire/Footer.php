<?php

namespace App\Http\Livewire;

use App\Models\Subscriber;
use Livewire\Component;

class Footer extends Component
{
    public $email;

    public $fullname;

    public function subscribe() {
        $validatedData = $this->validate([
            'fullname' => 'required|min:6',
            'email' => 'required|email',
        ]);

        Subscriber::create($validatedData);

        session()->flash('message', "{$this->fullname}, you successfully added as a member");

        return redirect()->to('/');
    }

    public function render()
    {
        return view('livewire.footer');
    }
}
