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

use App\Models\Employee;
Route::get('/crear-empleado', function () {
    $employee = new Employee();
    $employee->emp_id=1;
    $employee->emp_firstname = 'Juan';
    $employee->emp_lastname = 'Pérez';
    $employee->salary = 50000;
    $employee->emp_birth_date = '1884-03-20';
    $employee->emp_hire_date = '2019-05-12';
    $employee->save();
    return 'Empleado creado';
});

