<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Contact;
use App\Models\Connector;
use App\Models\Partner;
use App\Models\Sponsor;
use App\Models\Speaker;

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

            // 1. Save to Database
            Connector::create([
                'full_name'   => $validated['full_name'],
                'email'       => $validated['email'],
                'phone'       => $validated['phone'],
                'linkedin'    => $validated['linkedin'],
                'designation' => $validated['designation'],
                'expertise'   => $validated['expertise'],
                'bio'         => $validated['bio'],
                'status'      => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Connector saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin
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

            // 1. Save to Database
            Partner::create([
                'name'             => $validated['name'],
                'email'            => $validated['email'],
                'phone'            => $validated['phone'],
                'company'          => $validated['company'],
                'designation'      => $validated['designation'],
                'linkedin'         => $validated['linkedin'],
                'website'          => $validated['website'] ?? null,
                'partnership_type' => $validated['partnership_type'],
                'status'           => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Partner saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin
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

    public function submitSpeaker(Request $request)
    {
        $validated = $request->validate([
            'full_name'         => 'required|string|max:255',
            'phone'             => 'required|string|max:50',
            'email'             => 'nullable|email|max:255',
            'location'          => 'required|string|max:255',
            'primary_role'      => 'required|string|max:255',
            'speaking_language' => 'required|string|max:255',
            'social_media_url'  => 'required|url|max:255',
            'story'             => 'required|string|max:3000',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- SPEAKER SUBMISSION START ---');

            // 1. Save to Database
            $speaker = Speaker::create([
                'full_name'         => $validated['full_name'],
                'phone'             => $validated['phone'],
                'email'             => $validated['email'] ?? null,
                'location'          => $validated['location'],
                'primary_role'      => $validated['primary_role'],
                'speaking_language' => $validated['speaking_language'],
                'social_media_url'  => $validated['social_media_url'],
                'story'             => $validated['story'],
                'status'            => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('Speaker saved to database. ID: ' . $speaker->id);

            // 2. Email to Admin
            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            Mail::send('emails.speaker-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Speaker Application: ' . $validated['full_name']);
                if (!empty($validated['email'])) {
                    $message->replyTo($validated['email'], $validated['full_name']);
                }
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            if (!empty($validated['email'])) {
                \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
                Mail::send('emails.speaker-confirmation', $validated, function ($message) use ($validated) {
                    $message->to($validated['email'])
                            ->subject('Speaker Application Received - Young Chanakya X');
                });
                \Illuminate\Support\Facades\Log::info('User email sent.');
            }
            \Illuminate\Support\Facades\Log::info('--- SPEAKER SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your speaker application has been submitted successfully!'
                ]);
            }

            return back()->with('success', 'Your speaker application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Speaker Application failure: ' . $e->getMessage() . ' trace: ' . $e->getTraceAsString());
            
            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to send application via SMTP. Please try again.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to send application via SMTP. Please try again.');
        }
    }

    public function submitsponser(Request $request)
    {
        $validated = $request->validate([
            'name'              => 'required|string|max:255',
            'email'             => 'required|email|max:255',
            'phone'             => 'required|string|max:50',
            'company'           => 'required|string|max:255',
            'designation'       => 'required|string|max:255',
            'linkedin'          => 'required|url|max:255',
            'sponsership_level' => 'required|string|max:255',
            'website'           => 'nullable|url|max:255',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- sponser SUBMISSION START ---');

            // 1. Save to Database
            Sponsor::create([
                'name'              => $validated['name'],
                'email'             => $validated['email'],
                'phone'             => $validated['phone'],
                'company'           => $validated['company'],
                'designation'       => $validated['designation'],
                'linkedin'          => $validated['linkedin'],
                'website'           => $validated['website'] ?? null,
                'sponsership_level' => $validated['sponsership_level'],
                'status'            => 'pending',
            ]);
            \Illuminate\Support\Facades\Log::info('sponser saved to database.');

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // 2. Email to Admin
            Mail::send('emails.sponser-application', $validated, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New sponsership Application: ' . $validated['name'])
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user email to: '.$validated['email']);
            // 2. Email to User (Confirmation)
            Mail::send('emails.sponser-confirmation', $validated, function ($message) use ($validated) {
                $message->to($validated['email'])
                        ->subject('sponsership Application Received - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- sponser SUBMISSION END ---');

            return back()->with('success', 'Your sponsership application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP sponsership Application failure: ' . $e->getMessage());
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
            
            $mailData = $validated;
            $mailData['user_message'] = $mailData['message'];
            unset($mailData['message']);

            Mail::send('emails.contact-inquiry', $mailData, function ($message) use ($validated) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Contact Inquiry: ' . ($validated['subject'] ?? 'General Inquiry'))
                        ->replyTo($validated['email'], $validated['name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            // 3. Email to User (Confirmation)
            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            Mail::send('emails.contact-confirmation', $mailData, function ($message) use ($validated) {
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

    public function submitJobApplication(Request $request)
    {
        $validated = $request->validate([
            'posted_job_id'      => 'nullable|integer|exists:posted_jobs,id',
            'full_name'          => 'required|string|max:255',
            'email'              => 'required|email|max:255',
            'phone'              => 'required|string|max:50',
            'whatsapp_number'    => 'required|string|max:50',
            'dob'                => 'required|string',
            'nationality'        => 'required|string|max:255',
            'marital_status'     => 'required|string|max:255',
            'emergency_name'     => 'nullable|string|max:255',
            'emergency_phone'    => 'required|string|max:50',
            'residential_address'=> 'required|string',
            'pursuing_education' => 'required|in:yes,no',
            'college'            => 'nullable|string|max:255',
            'course'             => 'nullable|string|max:255',
            'semester'           => 'nullable|string|max:255',
            'institution'        => 'nullable|string|max:255',
            'degree'             => 'nullable|string|max:255',
            'year_of_passing'    => 'nullable|string|max:255',
            'linkedin_url'       => 'required|url|max:255',
            'resume_file'        => 'required|file|mimes:pdf,doc,docx|max:5120',
            'cover_letter'       => 'nullable|string|max:5000',
            'category'           => 'required|string|in:career,internship',
        ]);

        try {
            \Illuminate\Support\Facades\Log::info('--- JOB APPLICATION SUBMISSION START ---');

            // Handle Resume File Upload
            $resumeUrl = null;
            if ($request->hasFile('resume_file')) {
                $file = $request->file('resume_file');
                $filename = time() . '_' . preg_replace('/[^a-zA-Z0-9_.-]/', '_', $file->getClientOriginalName());
                
                // Ensure directory exists
                if (!file_exists(public_path('uploads/resumes'))) {
                    mkdir(public_path('uploads/resumes'), 0755, true);
                }
                
                $file->move(public_path('uploads/resumes'), $filename);
                $resumeUrl = asset('uploads/resumes/' . $filename);
            }

            // Save to Database
            $app = \App\Models\JobApplication::create([
                'posted_job_id'      => $validated['posted_job_id'] ?? null,
                'full_name'          => $validated['full_name'],
                'email'              => $validated['email'],
                'phone'              => $validated['phone'],
                'whatsapp_number'    => $validated['whatsapp_number'],
                'dob'                => $validated['dob'],
                'nationality'        => $validated['nationality'],
                'marital_status'     => $validated['marital_status'],
                'emergency_name'     => $validated['emergency_name'] ?? null,
                'emergency_phone'    => $validated['emergency_phone'],
                'residential_address'=> $validated['residential_address'],
                'pursuing_education' => $validated['pursuing_education'],
                'college'            => $validated['college'] ?? null,
                'course'             => $validated['course'] ?? null,
                'semester'           => $validated['semester'] ?? null,
                'institution'        => $validated['institution'] ?? null,
                'degree'             => $validated['degree'] ?? null,
                'year_of_passing'    => $validated['year_of_passing'] ?? null,
                'linkedin_url'       => $validated['linkedin_url'],
                'resume_url'         => $resumeUrl,
                'cover_letter'       => $validated['cover_letter'] ?? null,
                'category'           => $validated['category'],
                'status'             => 'new',
            ]);
            \Illuminate\Support\Facades\Log::info('Job application saved to database. ID: ' . $app->id);

            // Fetch job title for email
            $jobTitle = 'General Application';
            if ($app->posted_job_id) {
                $job = \App\Models\PostedJob::find($app->posted_job_id);
                if ($job) {
                    $jobTitle = $job->title;
                }
            }
            $emailData = array_merge($validated, ['job_title' => $jobTitle, 'resume_url' => $resumeUrl]);

            \Illuminate\Support\Facades\Log::info('Sending admin email...');
            // Email to Admin
            Mail::send('emails.job-application-admin', $emailData, function ($message) use ($validated, $jobTitle) {
                $message->to('youngchanakya.x@gmail.com')
                        ->subject('New Job Application: ' . $jobTitle . ' - ' . $validated['full_name'])
                        ->replyTo($validated['email'], $validated['full_name']);
            });
            \Illuminate\Support\Facades\Log::info('Admin email sent.');

            \Illuminate\Support\Facades\Log::info('Sending user confirmation email to: ' . $validated['email']);
            // Email to User (Confirmation)
            Mail::send('emails.job-application-user', $emailData, function ($message) use ($validated, $jobTitle) {
                $message->to($validated['email'])
                        ->subject('Application Received: ' . $jobTitle . ' - Young Chanakya X');
            });
            \Illuminate\Support\Facades\Log::info('User email sent.');
            \Illuminate\Support\Facades\Log::info('--- JOB APPLICATION SUBMISSION END ---');

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'success',
                    'message' => 'Your application has been submitted successfully!'
                ]);
            }

            return back()->with('success', 'Your application has been submitted successfully!');
        } catch (\Exception $e) {
            logger()->error('SMTP Job Application failure: ' . $e->getMessage() . ' trace: ' . $e->getTraceAsString());

            if ($request->ajax()) {
                return response()->json([
                    'type'    => 'danger',
                    'message' => 'Unable to submit application via SMTP. Please try again.'
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to submit application via SMTP. Please try again.');
        }
    }
}
