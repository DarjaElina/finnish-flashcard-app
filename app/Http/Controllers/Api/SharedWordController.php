<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SharedWord;

class SharedWordController extends Controller
{
    public function index(Request $request)
    {
        $query = SharedWord::query();

        if ($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $sortBy = $request->get('sort_by', 'finnish');
        $order = $request->get('order', 'asc');
        $query->orderBy($sortBy, $order);

        $perPage = $request->get('per_page', 9);

        $words = $query->paginate($perPage);

        return response()->json($words);
    }
}
