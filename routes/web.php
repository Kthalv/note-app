<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NoteController;

Route::get('/', function () {
    return view('welcome');
});

// Show all notes
Route::get('/notes', [NoteController::class, 'showAllNotes'])->name('showAllNotes');

// Create note routes
Route::get('notes/create', [NoteController::class, 'createNote'])->name('createNote');
Route::post('/notes/store', [NoteController::class, 'storeNote'])->name('storeNote');

// View, Edit, Update, and Delete notes
Route::get('notes/{id}', [NoteController::class, 'viewNote'])->name('viewNote');
Route::get('notes/{id}/edit', [NoteController::class, 'editNote'])->name('editNote');
Route::put('notes/{id}/update', [NoteController::class, 'updateNote'])->name('updateNote');
Route::delete('notes/{id}/delete', [NoteController::class, 'deleteNote'])->name('deleteNote');

// Search notes
Route::get('/search', [NoteController::class, 'searchNote']);

