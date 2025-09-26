<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Guest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Card $card)
    {
        $this->authorize('view', $card);

        $guests = $card->guests()
            ->latest()
            ->get();

        $stats = [
            'total' => $guests->count(),
            'attending' => $guests->where('rsvp_status', 'attending')->count(),
            'not_attending' => $guests->where('rsvp_status', 'not_attending')->count(),
            'pending' => $guests->where('rsvp_status', 'pending')->count(),
            'invited' => $guests->where('invitation_status', 'sent')->count(),
        ];

        return Inertia::render('Cards/Guests/Index', [
            'card' => $card,
            'guests' => $guests,
            'stats' => $stats,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Card $card)
    {
        $this->authorize('update', $card);

        return Inertia::render('Cards/Guests/Create', [
            'card' => $card,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Card $card)
    {
        $this->authorize('update', $card);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'guest_type' => 'required|in:guest,family,vip,child',
            'plus_ones' => 'integer|min:0|max:10',
            'dietary_requirements' => 'nullable|string',
        ]);

        $validated['card_id'] = $card->id;

        $guest = Guest::create($validated);

        return redirect()->route('cards.guests.index', $card)
            ->with('success', 'Guest added successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card, Guest $guest)
    {
        $this->authorize('view', $card);

        return Inertia::render('Cards/Guests/Show', [
            'card' => $card,
            'guest' => $guest,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card, Guest $guest)
    {
        $this->authorize('update', $card);

        return Inertia::render('Cards/Guests/Edit', [
            'card' => $card,
            'guest' => $guest,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card, Guest $guest)
    {
        $this->authorize('update', $card);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|email|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string',
            'guest_type' => 'required|in:guest,family,vip,child',
            'plus_ones' => 'integer|min:0|max:10',
            'dietary_requirements' => 'nullable|string',
        ]);

        $guest->update($validated);

        return redirect()->route('cards.guests.index', $card)
            ->with('success', 'Guest updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card, Guest $guest)
    {
        $this->authorize('update', $card);

        $guest->delete();

        return redirect()->route('cards.guests.index', $card)
            ->with('success', 'Guest removed successfully!');
    }

    /**
     * Bulk import guests from CSV or Excel file.
     */
    public function bulkImport(Request $request, Card $card)
    {
        $this->authorize('update', $card);

        $request->validate([
            'guests' => 'required|array',
            'guests.*.name' => 'required|string|max:255',
            'guests.*.email' => 'nullable|email|max:255',
            'guests.*.phone' => 'nullable|string|max:20',
            'guests.*.guest_type' => 'required|in:guest,family,vip,child',
            'guests.*.plus_ones' => 'integer|min:0|max:10',
        ]);

        $imported = 0;
        foreach ($request->guests as $guestData) {
            $guestData['card_id'] = $card->id;
            Guest::create($guestData);
            $imported++;
        }

        return redirect()->route('cards.guests.index', $card)
            ->with('success', "Successfully imported {$imported} guests!");
    }

    /**
     * Send invitation to a specific guest.
     */
    public function sendInvitation(Card $card, Guest $guest)
    {
        $this->authorize('update', $card);

        if (!$guest->email) {
            return back()->with('error', 'Guest must have an email address to send invitation.');
        }

        // Here you would typically queue a job to send the email
        // For now, we'll just mark it as sent
        $guest->markInvitationSent();

        return back()->with('success', 'Invitation sent successfully!');
    }

    /**
     * Send invitations to all guests with email addresses.
     */
    public function sendBulkInvitations(Card $card)
    {
        $this->authorize('update', $card);

        $guests = $card->guests()
            ->whereNotNull('email')
            ->where('invitation_status', 'pending')
            ->get();

        if ($guests->isEmpty()) {
            return back()->with('error', 'No guests with email addresses found to send invitations.');
        }

        $sent = 0;
        foreach ($guests as $guest) {
            // Here you would typically queue a job to send the email
            // For now, we'll just mark them as sent
            $guest->markInvitationSent();
            $sent++;
        }

        return back()->with('success', "Invitations sent to {$sent} guests!");
    }
}
