<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Model\Film;

class Home extends Component
{
    public function render()
    {
        $films = Film::all();
        return view('livewire.web.home', compact('films'));
    }
}
