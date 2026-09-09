<?php

namespace App\Http\Controllers;

use App\Mail\ClientMessageReceived;
use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class MessageController extends Controller
{
    public function create(): View
    {
        return view('messages');
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string', 'min:10'],
        ]);

        $message = Message::create($data);

        Mail::to(config('mail.developer_address'))->send(new ClientMessageReceived($message));

        return redirect()
            ->route('messages.create')
            ->with('success', 'Thanks, ' . $data['name'] . '! Your message has been sent successfully.');
    }
}
