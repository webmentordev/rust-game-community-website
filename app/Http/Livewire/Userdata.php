<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;

class Userdata extends Component
{
    public function render()
    {
        return view('livewire.components.userdata', [
            'users'=> User::latest()->paginate(5),
        ]);
    }
}
