<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validate([
            'full_name'   => 'required|string|max:255',
            'phone'       => 'required|string|max:50',
            'email'       => 'required|email|max:255',
            'linkedin'    => 'required|url|max:255',
            'designation' => 'required|string|max:255',
            'expertise'   => 'required|string|max:255',
            'bio'         => 'required|string|max:2000',
        ]);

        try {
            // 1. Email to Admin
            Mail::send('emails.directory-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Directory Application: ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });

            // 2. Email to User (Confirmation)
            Mail::send('emails.user-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Application Received - Young Chanakya X');
            });

            return back()->with('success', 'Your application has been submitted successfully for verification!');
        } catch (\Exception $e) {
            // Log the error message for debugging
            logger()->error('SMTP Directory Application failure: ' . $e->getMessage());
            
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please check mailer settings.');
        }
    }
}
