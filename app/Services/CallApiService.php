<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class CallApiService {
  public function getWords() {
    $apiKey = config('services.finnfast.key');
    $apiUrl = "https://finnfast.fi/api/words?limit=10&page=1&all=false";

    $response = Http::withHeaders([
      'x-api-key' => $apiKey,
    ])->get($apiUrl);

    if ($response->successful()) {
      return $response->json();
    }

    logger()->error('FinnFast API call failed', [
        'status' => $response->status(),
        'body' => $response->body(),
    ]);

    return [];
  }
}