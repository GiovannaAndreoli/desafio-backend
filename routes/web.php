<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Web\Home::class)->name('home');
Route::get('/cadastrar', \App\Livewire\Web\CreateFilm::class)->name('create');
Route::get('/ver', \App\Livewire\Web\ViewFilm::class)->name('see');
Route::post('/salvar-filme', function (Request $request) {
    $request->validate([
        'tittle' => 'required',
        'summary' => 'required',
        'cover ' => 'required|integer|min:1895|max:' . date('Y'),
    ]);

    Filme::create([
        'tittle' => $request->input('tittle'),
        'summary' => $request->input('summary'),
        'cover' => $request->input('cover'),
    ]);

    return redirect()->back()->with('success');
});
