<?php

namespace App\Http\Controllers;

use App\Models\CardTemplate;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CardTemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $category = $request->get('category', 'wedding');
        
        $templates = CardTemplate::active()
            ->byCategory($category)
            ->ordered()
            ->get();

        $categories = CardTemplate::distinct('category')->pluck('category')->toArray();

        return Inertia::render('Cards/Templates/Index', [
            'templates' => $templates,
            'categories' => $categories,
            'selectedCategory' => $category,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Cards/Templates/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'template_data' => 'required|array',
            'customizable_fields' => 'required|array',
            'preview_image' => 'nullable|string',
            'sort_order' => 'integer|min:0',
        ]);

        $template = CardTemplate::create($validated);

        return redirect()->route('card-templates.index')
            ->with('success', 'Template created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(CardTemplate $cardTemplate)
    {
        return Inertia::render('Cards/Templates/Show', [
            'template' => $cardTemplate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CardTemplate $cardTemplate)
    {
        return Inertia::render('Cards/Templates/Edit', [
            'template' => $cardTemplate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CardTemplate $cardTemplate)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required|string|max:100',
            'price' => 'required|numeric|min:0',
            'template_data' => 'required|array',
            'customizable_fields' => 'required|array',
            'preview_image' => 'nullable|string',
            'is_active' => 'boolean',
            'sort_order' => 'integer|min:0',
        ]);

        $cardTemplate->update($validated);

        return redirect()->route('card-templates.index')
            ->with('success', 'Template updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CardTemplate $cardTemplate)
    {
        $cardTemplate->delete();

        return redirect()->route('card-templates.index')
            ->with('success', 'Template deleted successfully!');
    }
}
