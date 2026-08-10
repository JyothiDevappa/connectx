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
        $allowedSections = ['overview', 'connectors', 'sponsors', 'sponsers', 'partners', 'speakers', 'careers', 'internships', 'posted_jobs', 'contacts', 'featured_guests', 'story_submissions', 'posts', 'categories'];
        if ($section === 'sponsers') $section = 'sponsors';
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
                'partnership_type' => $p->sponser_select,
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
                'sponsership_level' => $s->sponsorship_level,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });
        $sponsers = $sponsors;

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

        $contacts = \App\Models\Contact::orderByDesc('created_at')->get()->map(function ($c) {
            return [
                'id'        => $c->id,
                'name'      => $c->name,
                'email'     => $c->email,
                'phone'     => $c->phone,
                'subject'   => $c->subject ?? 'General',
                'message'   => $c->message,
                'status'    => $c->status,
                'notes'     => $c->notes ?? '',
                'submitted' => $c->created_at->format('Y-m-d'),
            ];
        });

        $speakers = \App\Models\Speaker::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'                => $s->id,
                'name'              => $s->full_name,
                'full_name'         => $s->full_name,
                'email'             => $s->email ?? '',
                'phone'             => $s->phone,
                'location'          => $s->location,
                'primary_role'      => $s->primary_role,
                'designation'       => $s->primary_role, // map to designation for generic columns
                'speaking_language' => $s->speaking_language,
                'social_media_url'  => $s->social_media_url,
                'linkedin'          => $s->social_media_url, // map to linkedin for generic cell link
                'story'             => $s->story,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });

        $featuredGuests = \App\Models\FeaturedGuest::orderByDesc('created_at')->get()->map(function ($g) {
            return [
                'id'               => $g->id,
                'name'             => $g->full_name,
                'full_name'        => $g->full_name,
                'email'            => $g->email,
                'phone'            => $g->phone,
                'company_name'     => $g->company_name,
                'company'          => $g->company_name,
                'designation'      => $g->designation,
                'social_media_url' => $g->social_media_url,
                'linkedin'         => $g->social_media_url,
                'topic'            => $g->topic ?? '',
                'status'           => $g->status,
                'notes'            => $g->notes ?? '',
                'submitted'        => $g->created_at->format('Y-m-d'),
            ];
        });

        $storySubmissions = \App\Models\StorySubmission::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'               => $s->id,
                'name'             => $s->full_name,
                'full_name'        => $s->full_name,
                'email'            => $s->email,
                'phone'            => $s->phone,
                'social_url'       => $s->social_url,
                'linkedin'         => $s->social_url,
                'talk_title'       => $s->talk_title,
                'speaking_language'=> $s->speaking_language,
                'talk_summary'     => $s->talk_summary,
                'status'           => $s->status,
                'notes'            => $s->notes ?? '',
                'submitted'        => $s->created_at->format('Y-m-d'),
            ];
        });

        $posts = \App\Models\Post::orderByDesc('created_at')->get()->map(function ($post) {
            return [
                'id'            => $post->id,
                'title'         => $post->title,
                'slug'          => $post->slug,
                'category'      => $post->category,
                'read_time'     => $post->read_time,
                'image'         => $post->image,
                'excerpt'       => $post->excerpt,
                'content'       => $post->content,
                'author_name'   => $post->author_name,
                'author_role'   => $post->author_role,
                'author_avatar' => $post->author_avatar,
                'status'        => $post->status,
                'submitted'     => $post->created_at->format('Y-m-d'),
            ];
        });

        $categories = \App\Models\Category::orderBy('name')->get()->map(function ($c) {
            return [
                'id'        => $c->id,
                'name'      => $c->name,
                'slug'      => $c->slug,
                'submitted' => $c->created_at->format('Y-m-d'),
            ];
        });

        $viewName = 'admin.' . ($section === 'sponsers' || $section === 'sponsors' ? 'sponsors' : $section);
        if (view()->exists($viewName)) {
            return view($viewName, compact('section', 'connectors', 'partners', 'sponsers', 'sponsors', 'postedJobs', 'careers', 'internships', 'contacts', 'speakers', 'featuredGuests', 'storySubmissions', 'posts', 'categories'));
        }

        return view('admin.dashboard', compact('section', 'connectors', 'partners', 'sponsers', 'sponsors', 'postedJobs', 'careers', 'internships', 'contacts', 'speakers', 'featuredGuests', 'storySubmissions', 'posts', 'categories'));
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
                'sponsership_level' => $s->sponsorship_level,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });

        return response()->json($sponsors);
    }

    public function sponsers(Request $request)
    {
        return $this->sponsors($request);
    }

    /**
     * Update sponsor status / notes.
     */
    public function updatesponsor(Request $request, $id)
    {
        $sponsor = \App\Models\Sponsor::findOrFail($id);

        $validated = $request->validate([
            'status' => 'required|in:pending,confirmed,declined',
            'notes'  => 'nullable|string|max:2000',
        ]);

        $sponsor->update($validated);

        return response()->json(['success' => true]);
    }

    public function updatesponser(Request $request, $id)
    {
        return $this->updatesponsor($request, $id);
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

    /**
     * Return contact inquiries as JSON (for AJAX reload if needed).
     */
    public function contacts(Request $request)
    {
        $contacts = \App\Models\Contact::orderByDesc('created_at')->get()->map(function ($c) {
            return [
                'id'        => $c->id,
                'name'      => $c->name,
                'email'     => $c->email,
                'phone'     => $c->phone,
                'subject'   => $c->subject ?? 'General',
                'message'   => $c->message,
                'status'    => $c->status,
                'notes'     => $c->notes ?? '',
                'submitted' => $c->created_at->format('Y-m-d'),
            ];
        });
        return response()->json($contacts);
    }

    /**
     * Update contact status/notes.
     */
    public function updateContactStatus(Request $request, $id)
    {
        $contact = \App\Models\Contact::findOrFail($id);

        // Status update
        if ($request->has('status')) {
            $contact->status = $request->input('status');
        }

        // Notes update
        if ($request->has('notes')) {
            $contact->notes = $request->input('notes');
        }

        $contact->save();

        return response()->json([
            'type'    => 'success',
            'message' => 'Inquiry updated successfully.',
            'data'    => $contact
        ]);
    }

    /**
     * Return speakers as JSON (for AJAX reload if needed).
     */
    public function speakers(Request $request)
    {
        $speakers = \App\Models\Speaker::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'                => $s->id,
                'name'              => $s->full_name,
                'full_name'         => $s->full_name,
                'email'             => $s->email ?? '',
                'phone'             => $s->phone,
                'location'          => $s->location,
                'primary_role'      => $s->primary_role,
                'designation'       => $s->primary_role,
                'speaking_language' => $s->speaking_language,
                'social_media_url'  => $s->social_media_url,
                'linkedin'          => $s->social_media_url,
                'story'             => $s->story,
                'status'            => $s->status,
                'notes'             => $s->notes ?? '',
                'submitted'         => $s->created_at->format('Y-m-d'),
            ];
        });
        return response()->json($speakers);
    }

    /**
     * Update speaker status/notes.
     */
    public function updateSpeaker(Request $request, $id)
    {
        $speaker = \App\Models\Speaker::findOrFail($id);

        // Status update
        if ($request->has('status')) {
            $speaker->status = $request->input('status');
        }

        // Notes update
        if ($request->has('notes')) {
            $speaker->notes = $request->input('notes');
        }

        $speaker->save();

        return response()->json([
            'type'    => 'success',
            'message' => 'Speaker application updated successfully.',
            'data'    => $speaker
        ]);
    }

    /**
     * Return featured guests as JSON.
     */
    public function featuredGuests(Request $request)
    {
        $guests = \App\Models\FeaturedGuest::orderByDesc('created_at')->get()->map(function ($g) {
            return [
                'id'               => $g->id,
                'name'             => $g->full_name,
                'full_name'        => $g->full_name,
                'email'            => $g->email,
                'phone'            => $g->phone,
                'company_name'     => $g->company_name,
                'company'          => $g->company_name,
                'designation'      => $g->designation,
                'social_media_url' => $g->social_media_url,
                'linkedin'         => $g->social_media_url,
                'topic'            => $g->topic ?? '',
                'status'           => $g->status,
                'notes'            => $g->notes ?? '',
                'submitted'        => $g->created_at->format('Y-m-d'),
            ];
        });
        return response()->json($guests);
    }

    /**
     * Update featured guest status/notes.
     */
    public function updateFeaturedGuest(Request $request, $id)
    {
        $guest = \App\Models\FeaturedGuest::findOrFail($id);

        if ($request->has('status')) {
            $guest->status = $request->input('status');
        }
        if ($request->has('notes')) {
            $guest->notes = $request->input('notes');
        }

        $guest->save();

        return response()->json([
            'type'    => 'success',
            'message' => 'Guest application updated successfully.',
            'data'    => $guest
        ]);
    }

    /**
     * Return story submissions as JSON.
     */
    public function storySubmissions(Request $request)
    {
        $stories = \App\Models\StorySubmission::orderByDesc('created_at')->get()->map(function ($s) {
            return [
                'id'               => $s->id,
                'name'             => $s->full_name,
                'full_name'        => $s->full_name,
                'email'            => $s->email,
                'phone'            => $s->phone,
                'social_url'       => $s->social_url,
                'linkedin'         => $s->social_url,
                'talk_title'       => $s->talk_title,
                'speaking_language'=> $s->speaking_language,
                'talk_summary'     => $s->talk_summary,
                'status'           => $s->status,
                'notes'            => $s->notes ?? '',
                'submitted'        => $s->created_at->format('Y-m-d'),
            ];
        });
        return response()->json($stories);
    }

    /**
     * Update story submission status/notes.
     */
    public function updateStorySubmission(Request $request, $id)
    {
        $story = \App\Models\StorySubmission::findOrFail($id);

        if ($request->has('status')) {
            $story->status = $request->input('status');
        }
        if ($request->has('notes')) {
            $story->notes = $request->input('notes');
        }

        $story->save();

        return response()->json([
            'type'    => 'success',
            'message' => 'Story submission updated successfully.',
            'data'    => $story
        ]);
    }

    /**
     * Return posts as JSON.
     */
    public function posts(Request $request)
    {
        $posts = \App\Models\Post::orderByDesc('created_at')->get()->map(function ($post) {
            return [
                'id'               => $post->id,
                'title'            => $post->title,
                'slug'             => $post->slug,
                'category'         => $post->category,
                'read_time'        => $post->read_time,
                'image'            => $post->image,
                'excerpt'          => $post->excerpt,
                'content'          => $post->content,
                'author_name'      => $post->author_name,
                'author_role'      => $post->author_role,
                'author_avatar'    => $post->author_avatar,
                'status'           => $post->status,
                'meta_title'       => $post->meta_title,
                'meta_description' => $post->meta_description,
                'meta_keywords'    => $post->meta_keywords,
                'submitted'        => $post->created_at->format('Y-m-d'),
            ];
        });
        return response()->json($posts);
    }

    /**
     * Save or update post.
     */
    public function savePost(Request $request, $id = null)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string|max:255',
            'read_time'        => 'nullable|string|max:255',
            'image'            => 'nullable|string|max:255',
            'excerpt'          => 'nullable|string|max:1000',
            'content'          => 'required|string',
            'author_name'      => 'nullable|string|max:255',
            'author_role'      => 'nullable|string|max:255',
            'status'           => 'required|string|in:published,draft',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        if ($id) {
            $post = \App\Models\Post::findOrFail($id);
            $post->update($validated);
        } else {
            $post = \App\Models\Post::create($validated);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Post saved successfully.',
            'data'    => $post
        ]);
    }

    /**
     * Delete post.
     */
    public function deletePost($id)
    {
        $post = \App\Models\Post::findOrFail($id);
        $post->delete();

        return response()->json([
            'type'    => 'success',
            'message' => 'Post deleted successfully.'
        ]);
    }

    /**
     * Show full-page to create a new blog post article.
     */
    public function createPostPage()
    {
        return view('admin.posts.form', [
            'post' => new \App\Models\Post()
        ]);
    }

    /**
     * Show full-page to edit an existing blog post article.
     */
    public function editPostPage($id)
    {
        $post = \App\Models\Post::findOrFail($id);
        return view('admin.posts.form', compact('post'));
    }

    /**
     * Save a new blog post article from full-page form.
     */
    public function savePostForm(Request $request)
    {
        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string|max:255',
            'read_time'        => 'nullable|string|max:255',
            'image'            => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'excerpt'          => 'nullable|string|max:1000',
            'content'          => 'required|string',
            'author_name'      => 'nullable|string|max:255',
            'author_role'      => 'nullable|string|max:255',
            'status'           => 'required|string|in:published,draft',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
            $uploadPath = public_path('uploads/blog');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }
            $imageFile->move($uploadPath, $fileName);
            $validated['image'] = 'uploads/blog/' . $fileName;
        }

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Prevent duplicate slugs
        if (\App\Models\Post::where('slug', $validated['slug'])->exists()) {
            $validated['slug'] .= '-' . rand(100, 999);
        }

        \App\Models\Post::create($validated);

        return redirect()->route('admin.dashboard', 'posts')
            ->with('success', 'Article published successfully.');
    }

    /**
     * Update an existing blog post article from full-page form.
     */
    public function updatePostForm(Request $request, $id)
    {
        $post = \App\Models\Post::findOrFail($id);

        $validated = $request->validate([
            'title'            => 'required|string|max:255',
            'category'         => 'required|string|max:255',
            'read_time'        => 'nullable|string|max:255',
            'image'            => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:4096',
            'excerpt'          => 'nullable|string|max:1000',
            'content'          => 'required|string',
            'author_name'      => 'nullable|string|max:255',
            'author_role'      => 'nullable|string|max:255',
            'status'           => 'required|string|in:published,draft',
            'meta_title'       => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:1000',
            'meta_keywords'    => 'nullable|string|max:500',
        ]);

        if ($request->hasFile('image')) {
            $imageFile = $request->file('image');
            $fileName = time() . '_' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
            $uploadPath = public_path('uploads/blog');
            if (!file_exists($uploadPath)) {
                mkdir($uploadPath, 0775, true);
            }
            $imageFile->move($uploadPath, $fileName);
            $validated['image'] = 'uploads/blog/' . $fileName;
        } else {
            unset($validated['image']);
        }

        $validated['slug'] = \Illuminate\Support\Str::slug($validated['title']);

        // Prevent duplicate slugs except self
        if (\App\Models\Post::where('slug', $validated['slug'])->where('id', '!=', $id)->exists()) {
            $validated['slug'] .= '-' . rand(100, 999);
        }

        $post->update($validated);

        return redirect()->route('admin.dashboard', 'posts')
            ->with('success', 'Article updated successfully.');
    }

    /**
     * Return categories as JSON.
     */
    public function categories(Request $request)
    {
        $cats = \App\Models\Category::orderBy('name')->get();
        // Seed default categories if table is empty
        if ($cats->isEmpty()) {
            $defaults = ['Storytelling', 'Networking', 'Learning', 'Personal Branding', 'Collaboration', 'Career Growth', 'Entrepreneurship'];
            foreach ($defaults as $d) {
                \App\Models\Category::create(['name' => $d, 'slug' => \Illuminate\Support\Str::slug($d)]);
            }
            $cats = \App\Models\Category::orderBy('name')->get();
        }
        return response()->json($cats->map(function ($c) {
            return [
                'id'        => $c->id,
                'name'      => $c->name,
                'slug'      => $c->slug,
                'submitted' => $c->created_at ? $c->created_at->format('Y-m-d') : null,
            ];
        }));
    }

    /**
     * Save or update category.
     */
    public function saveCategory(Request $request, $id = null)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:categories,name' . ($id ? ',' . $id : ''),
            'slug' => 'nullable|string|max:255|unique:categories,slug' . ($id ? ',' . $id : ''),
        ], [
            'name.unique' => 'The category is already existed',
            'slug.unique' => 'The category is already existed'
        ]);

        if (empty($validated['slug'])) {
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['name']);
        } else {
            $validated['slug'] = \Illuminate\Support\Str::slug($validated['slug']);
        }

        if ($id) {
            $cat = \App\Models\Category::findOrFail($id);
            $cat->update($validated);
        } else {
            $cat = \App\Models\Category::create($validated);
        }

        return response()->json([
            'type'    => 'success',
            'message' => 'Category saved successfully.',
            'data'    => [
                'id'        => $cat->id,
                'name'      => $cat->name,
                'slug'      => $cat->slug,
                'submitted' => $cat->created_at ? $cat->created_at->format('Y-m-d') : null,
            ]
        ]);
    }

    /**
     * Delete category.
     */
    public function deleteCategory($id)
    {
        $cat = \App\Models\Category::findOrFail($id);
        $cat->delete();

        return response()->json([
            'type'    => 'success',
            'message' => 'Category deleted successfully.'
        ]);
    }
}
