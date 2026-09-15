<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:100',
            'company' => 'required|string|max:150',
            'email'   => 'required|email|max:150',
            'message' => 'required|string|max:2000',
        ]);

        $response = Http::timeout(10)
            ->post('https://n8n.taktek.co/webhook/karama-contact', $validated);

        if ($response->successful()) {
            return response()->json(['ok' => true]);
        }

        return response()->json(['ok' => false], 500);
    }
}
