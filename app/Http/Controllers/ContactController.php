<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function contactMail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('ummyhabiba999@gmail.com')->send(new ContactMail($data));
            return response()->json(['success' => true, 'message' => 'Thankyou for contacting us!']);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Failed to send message.'], 500);
        }
    }

}
