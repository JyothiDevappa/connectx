<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Connector;

class AdminDashboardController extends Controller
{
    /**
     * Show the admin dashboard.
     */
    public function index($section = 'overview')
    {
        $allowedSections = ['overview', 'connectors', 'sponsors', 'partners', 'speakers', 'careers', 'internships', 'posted_jobs'];
        if (!in_array($section, $allowedSections)) {
            $section = 'overview';
        }

        // Fetch initial data to output directly into JS state
        $connectors = \App\Models\Connector::orderByDesc('created_at')->get()->map(function ($c) {
            return [
                'id'          => $c->id,
                'name'        => $c->full_name,
                'email'       => $c->email,
                'phone'       => $c->phone,
                'linkedin'    => $c->linkedin,
                'designation' => $c->designation,
                'expertise'   => $c->expertise,
                'bio'         => $c->bio,
                'status'      => $c->status,
                'notes'       => $c->notes ?? '',
                'submitted'   => $c->created_at->format('Y-m-d'),
            ];
        });

        $partners = \App\Models\Partner::orderByDesc('created_at')->get()->map(function ($p) {
            return [
                'id'               => $p->id,
                'name'             => $p->full_name,
                'email'            => $p->email,
                'phone'            => $p->phone,
                'company'          => $p->company_name,
                'designation'      => $p->designation,
                'linkedin'         => $p->linkedin,
                'website'          => $p->website_url ?? '',
                'partnership_type' => $p->sponsor_select,
                'status'           => $p->status,
                'notes'            => $p->notes ?? '',
                'submitted'        => $p->created_at->format('Y-m-d'),
            ];
        });

        $sponsors = \App\Models\Sponsor::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'                => $s->id,
                'name'              => $s->name,
                'email'             => $s->email,
                'phone'             => $s->phone,
                'company'           => $s->company,
                'designation'       => $s->designation,
                'linkedin'          => $s->linkedin,
                'website'           => $s->website ?? '',
                'sponsorship_level' => $s->sponsorship_level,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });

        $postedJobs = \App\Models\PostedJob::orderByDesc('created_at')->get();

        $apps = \App\Models\JobApplication::with('job')->orderByDesc('created_at')->get()->map(function ($a) {
            return [
                'id'            => $a->id,
                'posted_job_id' => $a->posted_job_id,
                'job_title'     => $a->job ? $a->job->title : 'General Application',
                'name'          => $a->full_name ?? '',
                'full_name'     => $a->full_name ?? '',
                'email'         => $a->email,
                'phone'         => $a->phone,
                'whatsapp_number'=> $a->whatsapp_number ?? '',
                'dob'           => $a->dob ?? '',
                'nationality'   => $a->nationality ?? '',
                'marital_status'=> $a->marital_status ?? '',
                'emergency_name'=> $a->emergency_name ?? '',
                'emergency_phone'=> $a->emergency_phone ?? '',
                'residential_address'=> $a->residential_address ?? '',
                'pursuing_education'=> $a->pursuing_education ?? 'no',
                'college'       => $a->college ?? '',
                'course'        => $a->course ?? '',
                'semester'      => $a->semester ?? '',
                'institution'   => $a->institution ?? '',
                'degree'        => $a->degree ?? '',
                'year_of_passing'=> $a->year_of_passing ?? '',
                'linkedin_url'  => $a->linkedin_url ?? '',
                'linkedin'      => $a->linkedin_url ?? '',
                'resume_url'    => $a->resume_url ?? '',
                'website'       => $a->resume_url ?? '',
                'cover_letter'  => $a->cover_letter,
                'category'      => $a->category,
                'status'        => $a->status,
                'notes'         => $a->notes ?? '',
                'submitted'     => $a->created_at->format('Y-m-d'),
            ];
        });

        $careers = $apps->filter(function($x) { return $x['category'] === 'career'; })->values();
        $internships = $apps->filter(function($x) { return $x['category'] === 'internship'; })->values();

        return view('admin.dashboard', compact('section', 'connectors', 'partners', 'sponsors', 'postedJobs', 'careers', 'internships'));
    }

    /**
     * Return connectors as JSON (for the admin panel JS).
     */
    public function connectors(Request $request)
    {
        $connectors = Connector::orderByDesc('created_at')->get()->map(function ($c) {
            return [
                'id'          => $c->id,
                'name'        => $c->full_name,
                'email'       => $c->email,
                'phone'       => $c->phone,
                'linkedin'    => $c->linkedin,
                'designation' => $c->designation,
                'expertise'   => $c->expertise,
                'bio'         => $c->bio,
                'status'      => $c->status,
                'notes'       => $c->notes ?? '',
                'submitted'   => $c->created_at->format('Y-m-d'),
            ];
        });

        return response()->json($connectors);
    }

    /**
     * Update connector status / notes.
     */
    public function updateConnector(Request $request, $id)
    {
        $connector = Connector::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,approved,rejected',
            'notes'  => 'nullable|string|max:2000',
        ]);

        $connector->update($validated);

        return response()->json(['success' => true]);
    }

    /**
     * Return partners as JSON (for the admin panel JS).
     */
    public function partners(Request $request)
    {
        $partners = \App\Models\Partner::orderByDesc('created_at')->get()->map(function ($p) {
            return [
                'id'               => $p->id,
                'name'             => $p->name,
                'email'            => $p->email,
                'phone'            => $p->phone,
                'company'          => $p->company,
                'designation'      => $p->designation,
                'linkedin'         => $p->linkedin,
                'website'          => $p->website ?? '',
                'partnership_type' => $p->partnership_type,
                'status'           => $p->status,
                'notes'            => $p->notes ?? '',
                'submitted'        => $p->created_at->format('Y-m-d'),
            ];
        });

        return response()->json($partners);
    }

    /**
     * Update partner status / notes.
     */
    public function updatePartner(Request $request, $id)
    {
        $partner = \App\Models\Partner::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,declined',
            'notes'  => 'nullable|string|max:2000',
        ]);

        $partner->update($validated);

        return response()->json(['success' => true]);
    }

    /**
     * Return sponsors as JSON (for the admin panel JS).
     */
    public function sponsors(Request $request)
    {
        $sponsors = \App\Models\Sponsor::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'                => $s->id,
                'name'              => $s->name,
                'email'             => $s->email,
                'phone'             => $s->phone,
                'company'           => $s->company,
                'designation'       => $s->designation,
                'linkedin'          => $s->linkedin,
                'website'           => $s->website ?? '',
                'sponsorship_level' => $s->sponsorship_level,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });

        return response()->json($sponsors);
    }

    /**
     * Update sponsor status / notes.
     */
    public function updateSponsor(Request $request, $id)
    {
        $sponsor = \App\Models\Sponsor::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,declined',
            'notes'  => 'nullable|string|max:2000',
        ]);

        $sponsor->update($validated);

        return response()->json(['success' => true]);
    }

    /**
     * Return posted jobs as JSON (for managing roles).
     */
    public function postedJobs(Request $request)
    {
        $jobs = \App\Models\PostedJob::orderByDesc('created_at')->get();
        return response()->json($jobs);
    }

    /**
     * Create or edit a posted job listing.
     */
    public function savePostedJob(Request $request, $id = null)
    {
        // Handle partial status updates from the index table
        if ($id && $request->has('status') && !$request->has('title')) {
            $validated = $request->validate([
                'status' => 'required|in:active,draft',
            ]);
            $job = \App\Models\PostedJob::findOrFail($id);
            $job->update($validated);
            return response()->json(['success' => true, 'job' => $job]);
        }

        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'category'   => 'required|in:career,internship',
            'department' => 'required|string|max:255',
            'work_mode'  => 'required|in:Remote,Hybrid,On-site',
            'experience' => 'nullable|string|max:255',
            'duration'   => 'nullable|string|max:255',
            'location'   => 'nullable|string|max:255',
            'skills'     => 'nullable|string|max:1000',
            'tagline'    => 'nullable|string|max:500',
            'content'    => 'required|string',
            'status'     => 'required|in:active,draft',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Check unique slug except self
        $query = \App\Models\PostedJob::where('slug', $validated['slug']);
        if ($id) {
            $query->where('id', '!=', $id);
        }
        if ($query->exists()) {
            $validated['slug'] .= '-' . rand(100, 999);
        }

        if ($id) {
            $job = \App\Models\PostedJob::findOrFail($id);
            $job->update($validated);
        } else {
            $job = \App\Models\PostedJob::create($validated);
        }

        return response()->json(['success' => true, 'job' => $job]);
    }

    /**
     * Delete a job posting.
     */
    public function deletePostedJob($id)
    {
        $job = \App\Models\PostedJob::findOrFail($id);
        $job->delete();
        return response()->json(['success' => true]);
    }

    /**
     * Return job applications as JSON.
     */
    public function jobApplications(Request $request)
    {
        $apps = \App\Models\JobApplication::with('job')->orderByDesc('created_at')->get()->map(function ($a) {
            return [
                'id'            => $a->id,
                'posted_job_id' => $a->posted_job_id,
                'job_title'     => $a->job ? $a->job->title : 'General Application',
                'name'          => $a->full_name ?? '',
                'full_name'     => $a->full_name ?? '',
                'email'         => $a->email,
                'phone'         => $a->phone,
                'whatsapp_number'=> $a->whatsapp_number ?? '',
                'dob'           => $a->dob ?? '',
                'nationality'   => $a->nationality ?? '',
                'marital_status'=> $a->marital_status ?? '',
                'emergency_name'=> $a->emergency_name ?? '',
                'emergency_phone'=> $a->emergency_phone ?? '',
                'residential_address'=> $a->residential_address ?? '',
                'pursuing_education'=> $a->pursuing_education ?? 'no',
                'college'       => $a->college ?? '',
                'course'        => $a->course ?? '',
                'semester'      => $a->semester ?? '',
                'institution'   => $a->institution ?? '',
                'degree'        => $a->degree ?? '',
                'year_of_passing'=> $a->year_of_passing ?? '',
                'linkedin_url'  => $a->linkedin_url ?? '',
                'linkedin'      => $a->linkedin_url ?? '',
                'resume_url'    => $a->resume_url ?? '',
                'website'       => $a->resume_url ?? '', // Alias to align standard columns
                'cover_letter'  => $a->cover_letter,
                'category'      => $a->category,
                'status'        => $a->status,
                'notes'         => $a->notes ?? '',
                'submitted'     => $a->created_at->format('Y-m-d'),
            ];
        });

        return response()->json($apps);
    }

    /**
     * Update job application status / notes.
     */
    public function updateJobApplication(Request $request, $id)
    {
        $app = \App\Models\JobApplication::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:new,review,shortlisted,hired,rejected',
            'notes'  => 'nullable|string|max:2000',
        ]);

        // Map status options from pending to new for standard visual badge checks
        if ($validated['status'] === 'pending') {
            $validated['status'] = 'review';
        }

        $app->update($validated);

        return response()->json(['success' => true]);
    }

    /**
     * Show full-page to create a new job posting.
     */
    public function createJobPage()
    {
        return view('admin.posted-jobs.form', [
            'job' => new \App\Models\PostedJob()
        ]);
    }

    /**
     * Show full-page to edit an existing job posting.
     */
    public function editJobPage($id)
    {
        $job = \App\Models\PostedJob::findOrFail($id);
        return view('admin.posted-jobs.form', compact('job'));
    }

    /**
     * Save a new job posting from full-page form.
     */
    public function savePostedJobForm(Request $request)
    {
        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'category'   => 'required|in:career,internship',
            'department' => 'required|string|max:255',
            'work_mode'  => 'required|in:Remote,Hybrid,On-site',
            'experience' => 'nullable|string|max:255',
            'duration'   => 'nullable|string|max:255',
            'location'   => 'nullable|string|max:255',
            'skills'     => 'nullable|string|max:1000',
            'tagline'    => 'nullable|string|max:500',
            'content'    => 'required|string',
            'status'     => 'required|in:active,draft',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Prevent duplicate slugs
        if (\App\Models\PostedJob::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] .= '-' . rand(100, 999);
        }

        \App\Models\PostedJob::create($validated);

        return redirect()->route('admin.dashboard', 'posted_jobs')
            ->with('success', 'Job posting created successfully.');
    }

    /**
     * Update an existing job posting from full-page form.
     */
    public function updatePostedJobForm(Request $request, $id)
    {
        $job = \App\Models\PostedJob::findOrFail($id);

        $validated = $request->validate([
            'title'      => 'required|string|max:255',
            'category'   => 'required|in:career,internship',
            'department' => 'required|string|max:255',
            'work_mode'  => 'required|in:Remote,Hybrid,On-site',
            'experience' => 'nullable|string|max:255',
            'duration'   => 'nullable|string|max:255',
            'location'   => 'nullable|string|max:255',
            'skills'     => 'nullable|string|max:1000',
            'tagline'    => 'nullable|string|max:500',
            'content'    => 'required|string',
            'status'     => 'required|in:active,draft',
        ]);

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Prevent duplicate slugs except self
        if (\App\Models\PostedJob::where('slug', $validated['slug'])->where('id', '!=', $id)->exists()) {
            $validated['slug'] .= '-' . rand(100, 999);
        }

        $job->update($validated);

        return redirect()->route('admin.dashboard', 'posted_jobs')
            ->with('success', 'Job posting updated successfully.');
    }
}
