<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Posts;
use App\Models\Rules;
use App\Models\Wipes;
use App\Models\Ranking;
use Livewire\Component;
use App\Models\WipeTimer;

class Admin extends Component
{
    public function render()
    {
        return view('livewire.admin');
    }
}