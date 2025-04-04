<?php

namespace App\Http\Controllers;

use App\Models\Promotion;
use App\Http\Requests\PromotionRequest;

class ResourceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $promotions = Promotion::all();
        return view('promotions.index', compact('promotions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('promotions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PromotionRequest $request)
    {
        $data = $request->validated();
        $promotion = Promotion::create($data);
        return redirect()->route('promotions.show', ['id' => $promotion->id])->with('success', 'LLM created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions.show', compact('promotion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $promotion = Promotion::findOrFail($id);
        return view('promotions.edit', compact('promotion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PromotionRequest $request, int $id)
    {
        $data = $request->validated();
        $promotion = Promotion::findOrFail($id);
        $promotion->update($data);
        return redirect()->route('promotions.show', compact('id'))->with('success', 'LLM updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        //
    }
}
