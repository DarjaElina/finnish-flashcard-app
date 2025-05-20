<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\CallApiService;

class ExternalWordController extends Controller
{
    protected CallApiService $apiService;

    public function __construct(CallApiService $apiService) {
        $this->apiService = $apiService;
    }

    public function index(Request $request) {
        $words = $this->apiService->getWords();
        return response()->json($words);
    }
}
