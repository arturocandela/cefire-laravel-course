<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'landing.home')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/services', 'landing.services')->name('services');
Route::view('/contact', 'landing.contact')->name('contact');

use App\Models\Note;
Route::get('/crear-nota', function () {
    $note = new Note();
    $note->title = 'Mi primer nota';
    $note->description = 'Descripción de la nota';
    $note->done = false;
    $note->save();
    return 'Nota creada';
});

Route::get('/eliminar-nota', function () {
    $note = Note::find(3); 
    if ($note) {
        $note->delete();
        return 'Nota eliminada';
    }
    return 'Nota no encontrada';
});

