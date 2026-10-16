<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'phone'   => ['nullable', 'string', 'max:30'],
            'subject' => ['required', 'string', 'max:150'],
            'message' => ['required', 'string', 'min:10', 'max:3000'],
            // Honeypot anti-spam: kolom ini disembunyikan, bot biasanya mengisinya.
            'company_url' => ['prohibited'],
        ]);

        Message::create([
            'name'    => $data['name'],
            'email'   => $data['email'],
            'phone'   => $data['phone'] ?? null,
            'subject' => $data['subject'],
            'body'    => $data['message'],
        ]);

        return redirect()
            ->route('contact')
            ->with('success', 'Terima kasih! Pesan kamu sudah kami terima dan akan dibalas maksimal 1×24 jam kerja.');
    }
}
