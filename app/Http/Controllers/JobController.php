<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PostedJob;

class JobController extends Controller
{
    /**
     * Show career listings.
     */
    public function careers()
    {
        $jobs = PostedJob::where('category', 'career')->where('status', 'active')->orderByDesc('created_at')->get();
        $isInternship = false;
        return view('career', compact('jobs', 'isInternship'));
    }

    /**
     * Show internship listings.
     */
    public function internships()
    {
        $jobs = PostedJob::where('category', 'internship')->where('status', 'active')->orderByDesc('created_at')->get();
        $isInternship = true;
        return view('internship', compact('jobs', 'isInternship'));
    }

    /**
     * Show career detail page.
     */
    public function careerDetail($slug)
    {
        $job = PostedJob::where('slug', $slug)->where('category', 'career')->where('status', 'active')->firstOrFail();
        
        // Fetch related internships
        $related = PostedJob::where('category', 'internship')
            ->where('status', 'active')
            ->limit(3)
            ->get();

        return view('job-detail', compact('job', 'related'));
    }

    /**
     * Show internship detail page.
     */
    public function internshipDetail($slug)
    {
        $job = PostedJob::where('slug', $slug)->where('category', 'internship')->where('status', 'active')->firstOrFail();
        
        // Fetch related internships (other active ones)
        $related = PostedJob::where('category', 'internship')
            ->where('slug', '!=', $slug)
            ->where('status', 'active')
            ->limit(3)
            ->get();

        return view('job-detail', compact('job', 'related'));
    }
}
