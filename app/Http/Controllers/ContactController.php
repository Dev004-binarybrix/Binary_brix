<?php
namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactInfo;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;

class ContactController extends Controller
{
    public function contactMail(Request $request)
    {
        try {

            $data = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'phone' => 'required|string|min:10|max:15',
                'company' => 'required|string|max:255',
                'job' => 'required|string|max:255',
                'hear_about_us' => 'required|string|max:255',
                'message' => 'required|string|max:2000',
                'recaptcha' => 'required',
            ],[
                'recaptcha.required' => 'Please complete the RECAPTCHA verification.',
            ]);

            // ContactInfo::create($data);
            Mail::to('ummyhabiba999@gmail.com')->send(new ContactMail($data));

            return response()->json(['success' => true, 'message' => 'Thank you for contacting us!']);
        } catch (ValidationException $e) {
            return response()->json([
                'success' => false,
                'errors' => $e->errors()
            ], 422);
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'message' => 'Failed to send message.'], 500);
        }
    }
}
