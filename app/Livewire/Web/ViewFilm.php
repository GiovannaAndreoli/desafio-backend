<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;
use Livewire\WithPagination;

class ViewFilm extends Component
{
    use WithPagination; 

    public function render()
    {
        $films = Film::paginate(3);
        return view('livewire.web.view-film', compact('films'));
    }
}
