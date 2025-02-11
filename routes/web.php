<?php

use Illuminate\Http\Request;
use App\Models\Film;

Route::get('/', \App\Livewire\Web\Home::class)->name('home');
Route::get('/cadastrar', \App\Livewire\Web\CreateFilm::class)->name('create');
Route::get('/ver', \App\Livewire\Web\ViewFilm::class)->name('see');
Route::get('/filme/{id}', \App\Livewire\Web\FilmDetail::class)->name('detail');
Route::post('/salvar-filme', function (Request $request)
 {

   
    $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'cover' => 'required|image|mimes:jpg,jpeg,png|max:2048',
    ]);

    $caminhoImagem = null;

    if ($request->hasFile('cover')) {
        $caminhoImagem = $request->file('cover')->store('filmes', 'public'); 
    }

    $film = Film::create([
        'title' => $request->input('title'),
        'summary' => $request->input('summary'),
        'cover' => $caminhoImagem,
    ]);

    return redirect()->route('detail', ['id' => $film->id])
    ->with('success', 'Filme cadastrado com sucesso!');
});
