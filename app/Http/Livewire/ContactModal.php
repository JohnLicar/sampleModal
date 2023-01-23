<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Http\Livewire\Modal;

class ContactModal extends Modal
{
    public function render()
    {
        return view('livewire.contact-modal');
    }
}
