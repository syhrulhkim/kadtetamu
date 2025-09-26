<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CardTemplateController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InvitationController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Public Card Templates (browsing)
Route::get('/templates', [CardTemplateController::class, 'index'])->name('card-templates.index');
Route::get('/templates/{cardTemplate}', [CardTemplateController::class, 'show'])->name('card-templates.show');

// Public Card View
Route::get('/cards/{slug}', [CardController::class, 'public'])->name('cards.public');

// Public Invitation Routes (no auth required)
Route::prefix('invitations')->name('invitations.')->group(function () {
    Route::get('/{token}', [InvitationController::class, 'view'])->name('view');
    Route::get('/{token}/rsvp', [InvitationController::class, 'rsvpForm'])->name('rsvp.form');
    Route::post('/{token}/rsvp', [InvitationController::class, 'rsvp'])->name('rsvp');
    Route::get('/{token}/rsvp/success', [InvitationController::class, 'rsvpSuccess'])->name('rsvp.success');
    Route::get('/{token}/gift-registry', [InvitationController::class, 'giftRegistry'])->name('gift-registry');
    Route::get('/{token}/download/{format?}', [InvitationController::class, 'download'])->name('download');
});

Route::middleware('auth')->group(function () {
    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Card Management Routes
    Route::resource('cards', CardController::class);
    Route::post('/cards/{card}/publish', [CardController::class, 'publish'])->name('cards.publish');
    Route::get('/cards/{card}/preview', [CardController::class, 'preview'])->name('cards.preview');

    // Guest Management Routes (nested under cards)
    Route::prefix('cards/{card}')->name('cards.')->group(function () {
        Route::resource('guests', GuestController::class);
        Route::post('/guests/bulk-import', [GuestController::class, 'bulkImport'])->name('guests.bulk-import');
        Route::post('/guests/{guest}/send-invitation', [GuestController::class, 'sendInvitation'])->name('guests.send-invitation');
        Route::post('/guests/send-bulk-invitations', [GuestController::class, 'sendBulkInvitations'])->name('guests.send-bulk-invitations');
    });

    // Admin Routes (for managing templates)
    Route::middleware('can:create,App\Models\CardTemplate')->group(function () {
        Route::resource('admin/card-templates', CardTemplateController::class)
            ->except(['index', 'show'])
            ->names([
                'create' => 'admin.card-templates.create',
                'store' => 'admin.card-templates.store',
                'edit' => 'admin.card-templates.edit',
                'update' => 'admin.card-templates.update',
                'destroy' => 'admin.card-templates.destroy',
            ]);
    });
});

require __DIR__.'/auth.php';
