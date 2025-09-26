<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use Inertia\Inertia;

class InvitationController extends Controller
{
    /**
     * Display the invitation for a guest.
     */
    public function view($token)
    {
        $guest = Guest::where('invitation_token', $token)
            ->with('card.template')
            ->firstOrFail();

        return Inertia::render('Invitations/View', [
            'guest' => $guest,
            'card' => $guest->card,
            'template' => $guest->card->template,
        ]);
    }

    /**
     * Show the RSVP form for a guest.
     */
    public function rsvpForm($token)
    {
        $guest = Guest::where('invitation_token', $token)
            ->with('card')
            ->firstOrFail();

        return Inertia::render('Invitations/Rsvp', [
            'guest' => $guest,
            'card' => $guest->card,
        ]);
    }

    /**
     * Process the RSVP response.
     */
    public function rsvp(Request $request, $token)
    {
        $guest = Guest::where('invitation_token', $token)->firstOrFail();

        $validated = $request->validate([
            'rsvp_status' => 'required|in:attending,not_attending,maybe',
            'rsvp_message' => 'nullable|string|max:500',
            'dietary_requirements' => 'nullable|string|max:255',
            'plus_ones' => 'integer|min:0|max:10',
        ]);

        $guest->update([
            'rsvp_status' => $validated['rsvp_status'],
            'rsvp_message' => $validated['rsvp_message'] ?? null,
            'dietary_requirements' => $validated['dietary_requirements'] ?? $guest->dietary_requirements,
            'plus_ones' => $validated['plus_ones'] ?? $guest->plus_ones,
            'rsvp_received_at' => now(),
        ]);

        $message = match($validated['rsvp_status']) {
            'attending' => 'Thank you for confirming your attendance! We look forward to seeing you.',
            'not_attending' => 'Thank you for letting us know. You will be missed.',
            'maybe' => 'Thank you for your response. Please let us know as soon as you can confirm.',
        };

        return Inertia::render('Invitations/RsvpSuccess', [
            'guest' => $guest,
            'card' => $guest->card,
            'message' => $message,
        ]);
    }

    /**
     * Display RSVP confirmation page.
     */
    public function rsvpSuccess($token)
    {
        $guest = Guest::where('invitation_token', $token)
            ->with('card')
            ->firstOrFail();

        return Inertia::render('Invitations/RsvpSuccess', [
            'guest' => $guest,
            'card' => $guest->card,
            'message' => 'Your RSVP has been recorded successfully.',
        ]);
    }

    /**
     * Show gift registry or additional information.
     */
    public function giftRegistry($token)
    {
        $guest = Guest::where('invitation_token', $token)
            ->with('card')
            ->firstOrFail();

        return Inertia::render('Invitations/GiftRegistry', [
            'guest' => $guest,
            'card' => $guest->card,
        ]);
    }

    /**
     * Download invitation as PDF or image.
     */
    public function download($token, $format = 'pdf')
    {
        $guest = Guest::where('invitation_token', $token)
            ->with('card.template')
            ->firstOrFail();

        // Here you would generate and return the file
        // For now, just redirect back
        return back()->with('info', 'Download feature coming soon!');
    }
}
