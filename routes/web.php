<?php

use Illuminate\Http\Request;
use App\Models\Film;

Route::get('/', \App\Livewire\Web\Home::class)->name('home');
Route::get('/cadastrar', \App\Livewire\Web\CreateFilm::class)->name('create');
Route::get('/ver', \App\Livewire\Web\ViewFilm::class)->name('see');
Route::post('/salvar-filme', function (Request $request) {

   
    $request->validate([
        'title' => 'required',
        'summary' => 'required',
        'cover' => 'nullable|image',
    ]);

    $caminhoImagem = null;

    if ($request->hasFile('cover')) {
        $caminhoImagem = $request->file('cover')->store('filmes', 'public'); 
    }

    Film::create([
        'title' => $request->input('title'),
        'summary' => $request->input('summary'),
        'cover' => $caminhoImagem,
    ]);

    return redirect()->back()->with('success', 'Filme cadastrado!');
});
