<?php

namespace App\Livewire\Web;

use Livewire\Component;
use App\Models\Film;

class FilmDetail extends Component
{
    public $film;

    public function mount($id)
    {
        
        $this->film = Film::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.web.film-detail', [
            'film' => $this->film
        ]);
    }
}
