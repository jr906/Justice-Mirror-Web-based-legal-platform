<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('admin.dashboard');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    Route::get('/clients', function () {
        return view('admin.clients.index');
    })->name('clients.index');

    Route::get('/clients/create', function () {
        return view('admin.clients.create');
    })->name('clients.create');

    Route::get('/cases', function () {
        return view('admin.cases.index');
    })->name('cases.index');

    Route::get('/cases/create', function () {
        return view('admin.cases.create');
    })->name('cases.create');

    Route::get('/cases/show', function () {
        return view('admin.cases.show');
    })->name('cases.show');

    Route::get('/hearings', function () {
        return view('admin.hearings.index');
    })->name('hearings.index');

    Route::get('/hearings/create', function () {
        return view('admin.hearings.create');
    })->name('hearings.create');

    Route::get('/appointments', function () {
        return view('admin.appointments.index');
    })->name('appointments.index');

    Route::get('/documents', function () {
        return view('admin.documents.index');
    })->name('documents.index');

    Route::get('/documents/create', function () {
        return view('admin.documents.create');
    })->name('documents.create');
});

Route::prefix('lawyer')->name('lawyer.')->group(function () {
    Route::get('/dashboard', function () {
        return view('lawyer.dashboard');
    })->name('dashboard');

    Route::get('/cases', function () {
        return view('lawyer.cases.index');
    })->name('cases.index');
});

Route::prefix('client')->name('client.')->group(function () {
    Route::get('/dashboard', function () {
        return view('client.dashboard');
    })->name('dashboard');

    Route::get('/cases', function () {
        return view('client.cases.index');
    })->name('cases.index');

    Route::get('/appointments', function () {
        return view('client.appointments.index');
    })->name('appointments.index');
});