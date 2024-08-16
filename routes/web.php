<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');

Route::post('/contacts', [ContactController::class, 'handleCreateFormSubmission'])->name('contacts.store');

Route::get('/contacts/{id}', [ContactController::class, 'show'])->name('contacts.show');

Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');

Route::put('/contacts/{id}', [ContactController::class, 'handleEditFormSubmission'])->name('contacts.update');

Route::delete('/contacts/{id}', [ContactController::class, 'destroy'])->name('contacts.destroy');