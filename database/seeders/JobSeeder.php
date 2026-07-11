<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostedJob;
use Illuminate\Support\Str;

class JobSeeder extends Seeder
{
    public function run(): void
    {
        $jobs = [
            [
                'title' => 'Content & Storytelling Lead',
                'category' => 'career',
                'department' => 'Content',
                'work_mode' => 'Remote',
                'experience' => '2+ years',
                'duration' => null,
                'location' => 'Remote',
                'skills' => 'Writing, Editing, Storytelling, Content Strategy',
                'tagline' => 'Own the editorial voice of YCX — from speaker story shaping to newsletter and social copy.',
                'content' => '<h2>About the Role</h2><p>Own the editorial voice of YCX — from speaker story shaping to newsletter and social copy. You\'ll work closely with speakers to turn raw experience into something worth reading or watching.</p><h2>Key Responsibilities</h2><ul><li>Shape compelling narratives from interviews and speaker transcripts</li><li>Write engaging newsletters, social media copy, and site content</li><li>Collaborate with designers to align visuals and content</li></ul>',
            ],
            [
                'title' => 'Community Manager',
                'category' => 'career',
                'department' => 'Community',
                'work_mode' => 'Hybrid',
                'experience' => '1–3 years',
                'duration' => null,
                'location' => 'Tamil Nadu',
                'skills' => 'Event Management, Communication, Community Building',
                'tagline' => 'Be the day-to-day face of YCX for our members — onboarding, moderation, and events.',
                'content' => '<h2>About the Role</h2><p>Be the day-to-day face of YCX for our members — onboarding new speakers, moderating conversations, and organizing local meetups and events.</p><h2>Key Responsibilities</h2><ul><li>Onboard new members and guide them through community benefits</li><li>Moderate internal channels and foster positive discussions</li><li>Manage logistics and execution of local meetups</li></ul>',
            ],
            [
                'title' => 'Podcast & Video Producer',
                'category' => 'career',
                'department' => 'Production',
                'work_mode' => 'Remote',
                'experience' => 'Portfolio required',
                'duration' => null,
                'location' => 'Remote',
                'skills' => 'Video Editing, Podcast Production, Audio Design, Premiere Pro',
                'tagline' => 'Plan, shoot, and edit YCX\'s podcast and speaker sessions end to end.',
                'content' => '<h2>About the Role</h2><p>Plan, shoot, and edit YCX\'s podcast and speaker sessions — from pre-production briefs to the final cut that goes out to our audience.</p>',
            ],
            [
                'title' => 'Growth & Social Media Marketer',
                'category' => 'career',
                'department' => 'Marketing',
                'work_mode' => 'Remote',
                'experience' => 'Audience track record',
                'duration' => null,
                'location' => 'Remote',
                'skills' => 'Growth Marketing, Social Media Strategy, Analytics, Content Creation',
                'tagline' => 'Own YCX\'s presence across Instagram, LinkedIn, and YouTube.',
                'content' => '<h2>About the Role</h2><p>Own YCX\'s presence across Instagram, LinkedIn, and YouTube — turning speaker sessions and community moments into content that actually travels.</p>',
            ],
            [
                'title' => 'Partnerships & Sponsorships Associate',
                'category' => 'career',
                'department' => 'Partnerships',
                'work_mode' => 'Remote',
                'experience' => 'B2B Sales / BD',
                'duration' => null,
                'location' => 'Remote',
                'skills' => 'Business Development, Client Relations, Pipeline Management',
                'tagline' => 'Build relationships with brands and organizations joining the YCX ecosystem.',
                'content' => '<h2>About the Role</h2><p>Build relationships with brands, institutions, and organizations who want to be part of the YCX ecosystem — from event sponsors to platform collaborators.</p>',
            ],
            [
                'title' => 'UI/UX & Brand Designer',
                'category' => 'career',
                'department' => 'Design',
                'work_mode' => 'Remote',
                'experience' => 'Portfolio required',
                'duration' => null,
                'location' => 'Remote',
                'skills' => 'Figma, UI/UX Design, Brand Identity, Visual Design',
                'tagline' => 'Shape how YCX looks and feels across web, social, and event collateral.',
                'content' => '<h2>About the Role</h2><p>Help shape how YCX looks and feels across web, social, and event collateral — working closely with our founder on brand-critical projects.</p>',
            ],
            [
                'title' => 'Web Developer Intern',
                'category' => 'internship',
                'department' => 'Tech',
                'work_mode' => 'Remote',
                'experience' => 'HTML/CSS/JS',
                'duration' => '3 months',
                'location' => 'Remote',
                'skills' => 'HTML, CSS, JavaScript, Laravel, Database Administration',
                'tagline' => 'Support the build-out of YCX\'s website and internal tools.',
                'content' => '<h2>About the Role</h2><p>Support the build-out of YCX\'s website and internal tools — a hands-on internship for someone who wants real shipped work, not busywork.</p>',
            ],
        ];

        foreach ($jobs as $job) {
            PostedJob::create([
                'title' => $job['title'],
                'slug' => Str::slug($job['title']),
                'category' => $job['category'],
                'department' => $job['department'],
                'work_mode' => $job['work_mode'],
                'experience' => $job['experience'],
                'duration' => $job['duration'],
                'location' => $job['location'],
                'skills' => $job['skills'],
                'tagline' => $job['tagline'],
                'content' => $job['content'],
                'status' => 'active',
            ]);
        }
    }
}
