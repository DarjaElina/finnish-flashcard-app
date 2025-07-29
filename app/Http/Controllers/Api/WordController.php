<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Word;
use Illuminate\Http\Request;

class WordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return $request->user()->words;
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'finnish' => 'required|string|max:50',
            'english' => 'required|string|max:50',
            'example' => 'required|string|max:250'
        ]);

        $user = $request->user();

        $word = $user->words()->create($validated);

        return response()->json($word, 201);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $word = Word::findOrFail($id);
        $validated = $request->validate([
            'finnish' => 'sometimes|string|max:50',
            'english' => 'sometimes|string|max:50',
            'example' => 'sometimes|string|max:250'
        ]);

        $word->update($validated);
        return response()->json($word);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $word = Word::findOrFail($id);
        $word->delete();
        return response()->json(null, 204);
    }
}
