<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\CardTemplate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cards = Card::with(['template', 'guests'])
            ->byUser(auth()->id())
            ->latest()
            ->get();

        return Inertia::render('Cards/Index', [
            'cards' => $cards,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        $templateId = $request->get('template');
        $template = null;

        if ($templateId) {
            $template = CardTemplate::findOrFail($templateId);
        }

        return Inertia::render('Cards/Create', [
            'template' => $template,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'template_id' => 'required|exists:card_templates,id',
            'title' => 'required|string|max:255',
            'event_type' => 'required|string|max:100',
            'event_date' => 'required|date|after:today',
            'venue' => 'nullable|string|max:255',
            'event_description' => 'nullable|string',
            'custom_data' => 'required|array',
        ]);

        $template = CardTemplate::findOrFail($validated['template_id']);
        
        $validated['user_id'] = auth()->id();
        $validated['total_amount'] = $template->price;

        $card = Card::create($validated);

        return redirect()->route('cards.show', $card)
            ->with('success', 'Card created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Card $card)
    {
        $this->authorize('view', $card);
        
        $card->load(['template', 'guests']);

        return Inertia::render('Cards/Show', [
            'card' => $card,
            'rsvpStats' => $card->rsvp_stats,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Card $card)
    {
        $this->authorize('update', $card);

        $card->load('template');

        return Inertia::render('Cards/Edit', [
            'card' => $card,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Card $card)
    {
        $this->authorize('update', $card);

        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'event_type' => 'required|string|max:100',
            'event_date' => 'required|date',
            'venue' => 'nullable|string|max:255',
            'event_description' => 'nullable|string',
            'custom_data' => 'required|array',
            'status' => 'in:draft,published',
        ]);

        $card->update($validated);

        return redirect()->route('cards.show', $card)
            ->with('success', 'Card updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Card $card)
    {
        $this->authorize('delete', $card);

        $card->delete();

        return redirect()->route('cards.index')
            ->with('success', 'Card deleted successfully!');
    }

    /**
     * Publish the card.
     */
    public function publish(Card $card)
    {
        $this->authorize('update', $card);

        $card->update([
            'status' => 'published',
            'is_public' => true,
            'published_at' => now(),
        ]);

        return redirect()->route('cards.show', $card)
            ->with('success', 'Card published successfully!');
    }

    /**
     * Preview the card publicly.
     */
    public function preview(Card $card)
    {
        $this->authorize('view', $card);

        $card->load('template');

        return Inertia::render('Cards/Preview', [
            'card' => $card,
        ]);
    }

    /**
     * Display public card by slug.
     */
    public function public($slug)
    {
        $card = Card::where('slug', $slug)
            ->where('is_public', true)
            ->with('template')
            ->firstOrFail();

        return Inertia::render('Cards/Public', [
            'card' => $card,
        ]);
    }
}
