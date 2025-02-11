<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class ViewFilm extends Component
{
    public function render()
    {
        $films = Film::all();
        return view('livewire.web.view-film', compact('films'));
    }
}
