<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;

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
            \Illuminate\Support\Facades\Log::info('--- CONNECTORS LIST SUBMISSION START ---');
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 1. Email to Admin
            Mail::send('emails.directory-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Directory Application: ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.user-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- CONNECTORS LIST SUBMISSION END ---');

            return back()->with('success', 'Your application has been submitted successfully for verification!');
        } catch (\Exception $e) {
            // Log the error message for debugging
            logger()->error('SMTP Directory Application failure: ' . $e->getMessage());
            
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please check mailer settings.');
        }
    }

    public function submitPartner(Request $request)
    {
        $validated = $request->validate([
            'name'             => 'required|string|max:255',
            'email'            => 'required|email|max:255',
            'phone'            => 'required|string|max:50',
            'company'          => 'required|string|max:255',
            'designation'      => 'required|string|max:255',
            'linkedin'         => 'required|url|max:255',
            'partnership_type' => 'required|string|max:255',
            'website'          => 'nullable|url|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- PARTNER SUBMISSION START ---');
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 1. Email to Admin
            Mail::send('emails.partner-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Partnership Application: ' . $validated['name'])
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.partner-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Partnership Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- PARTNER SUBMISSION END ---');

            return back()->with('success', 'Your partnership application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Partnership Application failure: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please try again.');
        }
    }

    public function submitSponsor(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'required|string|max:50',
            'company'           => 'required|string|max:255',
            'designation'       => 'required|string|max:255',
            'linkedin'          => 'required|url|max:255',
            'sponsorship_level' => 'required|string|max:255',
            'website'           => 'nullable|url|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- SPONSOR SUBMISSION START ---');
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 1. Email to Admin
            Mail::send('emails.sponsor-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Sponsorship Application: ' . $validated['name'])
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.sponsor-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Sponsorship Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- SPONSOR SUBMISSION END ---');

            return back()->with('success', 'Your sponsorship application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Sponsorship Application failure: ' . $e->getMessage());
            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please try again.');
        }
    }

    public function submitContact(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'phone'   => 'required|string|max:50',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- CONTACT SUBMISSION START ---');

            // 1. Save to Database
            $contact = Contact::create($validated);
            \Illuminate\Support\Facades\Log::info('Saved to database. ID: ' . $contact->id);

            // 2. Email to Admin
            \Illuminate\Support\Facades\Log::info('Sending admin inquiry email...');
            Mail::send('emails.contact-inquiry', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Contact Inquiry: ' . ($validated['subject'] ?? 'General Inquiry'))
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.contact-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Contact Inquiry Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- CONTACT SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Thank you for your inquiry! Our team will contact you shortly.'
                ]);
            }

            return back()->with('success', 'Thank you for your inquiry! Our team will contact you shortly.');
        } catch (\Exception $e) {
            logger()->error('SMTP Contact Inquiry failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send message via SMTP. Please check mailer settings.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send message via SMTP. Please check mailer settings.');
        }
    }

    public function submitRsvp(Request $request)
    {
        $validated = $request->validate([
            'full_name'   => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'phone'       => 'required|string|max:50',
            'social_url'  => 'required|url|max:255',
            'event_title' => 'required|string|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- EVENT RSVP SUBMISSION START ---');
            \Illuminate\Support\Facades\Log::info('Sending admin email...');

            // 1. Email to Admin
            Mail::send('emails.event-rsvp-admin', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Event Application: ' . $validated['event_title'] . ' - ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 2. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.event-rsvp-user', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('Application Received: ' . $validated['event_title'] . ' - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- EVENT RSVP SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your registration has been received successfully. A member of our team will contact you soon with the event schedule and further details.'
                ]);
            }

            return back()->with('success', 'Your registration has been received successfully. A member of our team will contact you soon with the event schedule and further details.');
        } catch (\Exception $e) {
            logger()->error('SMTP Event RSVP Application failure: ' . $e->getMessage());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send RSVP application via SMTP. Please try again later.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send RSVP application via SMTP. Please check mailer settings.');
        }
    }
}
