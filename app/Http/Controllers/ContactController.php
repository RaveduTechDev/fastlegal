<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use App\Models\Message;
use Filament\Notifications\Livewire\Notifications;
use Illuminate\Http\Request;


class ContactController extends Controller
{
    public function send(Request $request)
    {
        // validate dashboard fillament
        $validateData = $request->validate([
            'name' => 'required|min:1|max:255',
            'email' => 'required|email|min:1|max:255',
            'phone' => 'required',
            'business_field' => 'required',
            'message' => 'required',
        ], [
            'name.required' => 'Nama tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Email harus valid.',
            'business_field.required' => 'Bidang usaha tidak boleh kosong.',
            'message.required' => 'Pesan tidak boleh kosong.',
        ]);

        // save data to database
        $contact = Message::create($validateData);

        if ($contact) {
            return redirect()->back()->with('success', 'Terima kasih pertanyaan anda kami terima');
        } else {
            return redirect()->back()->with('error', 'Pesan gagal dikirim');
        }
    }
}
