@php
/**
 * Privacy Policy Page
 */
$seo = [
    'title'       => 'Privacy Policy — Young Chanakya X',
    'description' => 'Learn how Young Chanakya X collects, uses, and protects your personal information when you use our website and services.',
    'keywords'    => 'privacy policy, YCX privacy, data protection, young chanakya privacy',
    'image'       => asset('images/assets/seo-share.jpg'),
    'type'        => 'website',
];
@endphp

@extends('layout.app')

@push('styles')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fraunces:ital,opsz,wght@0,9..144,400;0,9..144,500;0,9..144,600;0,9..144,700;0,9..144,900;1,9..144,500;1,9..144,600&family=Space+Mono:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/custom-home.css') }}">
<link rel="stylesheet" href="{{ asset('css/about-us.css') }}">
<link rel="stylesheet" href="{{ asset('css/career.css') }}">
<style>
  #hdr:not(.scrolled) .hamburger span {
      background: #0c3a30 !important;
  }
  .privacy-container {
      padding: 180px 0 100px;
      background: var(--cream);
  }
  .privacy-content {
      max-width: 800px;
      margin: 0 auto;
      background: var(--white);
      padding: 60px;
      border-radius: 24px;
      border: 1.5px solid rgba(12, 58, 48, 0.12);
      box-shadow: 0 20px 40px rgba(12, 58, 48, 0.04);
  }
  .privacy-content h1 {
      font-family: 'Fraunces', serif;
      font-size: clamp(34px, 4vw, 48px);
      font-weight: 700;
      color: var(--ink);
      margin-bottom: 12px;
  }
  .privacy-content .last-updated {
      font-family: 'Space Mono', monospace;
      font-size: 12px;
      color: var(--peach-deep);
      margin-bottom: 40px;
      display: block;
      text-transform: uppercase;
      letter-spacing: 1px;
  }
  .privacy-content h2 {
      font-family: 'Fraunces', serif;
      font-size: 22px;
      font-weight: 600;
      color: var(--ink);
      margin-top: 36px;
      margin-bottom: 16px;
  }
  .privacy-content p {
      font-size: 15px;
      color: var(--text-soft);
      line-height: 1.8;
      margin-bottom: 20px;
  }
  .privacy-content ul {
      list-style: disc;
      padding-left: 20px;
      margin-bottom: 24px;
  }
  .privacy-content li {
      font-size: 15px;
      color: var(--text-soft);
      line-height: 1.8;
      margin-bottom: 8px;
  }
  @media(max-width: 768px) {
      .privacy-content {
          padding: 30px 20px;
          border-radius: 16px;
      }
      .privacy-container {
          padding: 130px 20px 60px;
      }
  }
</style>
@endpush

@section('content')
<div class="career-body privacy-container">
  <div class="wrap">
    <article class="privacy-content">
      <h1>Privacy Policy</h1>
      <span class="last-updated">Last Updated: July 11, 2026</span>

      <p>Young Chanakya X ("we," "our," or "us") is committed to protecting your privacy. This Privacy Policy explains how we collect, use, disclose, and safeguard your information when you visit our website, apply for directory listings, sponsorships, partnerships, speaker opportunities, or jobs/internships.</p>

      <h2>1. Information We Collect</h2>
      <p>We may collect information about you in a variety of ways. The information we may collect on the website includes:</p>
      <ul>
        <li><strong>Personal Data:</strong> Personally identifiable information, such as your name, email address, phone number, date of birth, educational background, professional details, and links to your social profiles (e.g., LinkedIn, portfolio), which you voluntarily provide to us when submitting forms.</li>
        <li><strong>Application Materials:</strong> Resumes, cover letters, portfolios, and emergency contact details submitted during job or internship applications.</li>
        <li><strong>Derivative Data:</strong> Information our servers automatically collect when you access the site, such as your IP address, browser type, operating system, access times, and the pages you have viewed directly before and after accessing the site.</li>
      </ul>

      <h2>2. Use of Your Information</h2>
      <p>Having accurate information about you permits us to provide you with a smooth, efficient, and customized experience. Specifically, we may use information collected about you via the website to:</p>
      <ul>
        <li>Process and evaluate applications for internships, jobs, directory listings, speaking roles, sponsorships, or partnerships.</li>
        <li>Send you administrative information, application updates, or marketing and promotional communications.</li>
        <li>Email you regarding your inquiries, contact requests, or RSVP confirmations.</li>
        <li>Deliver targeted advertising, newsletters, and other information regarding promotions and the site to you.</li>
        <li>Monitor and analyze usage and trends to improve your experience with the website.</li>
      </ul>

      <h2>3. Disclosure of Your Information</h2>
      <p>We do not sell, trade, or share your personal information with third parties for their promotional purposes. We may share information we have collected about you in certain situations, including:</p>
      <ul>
        <li><strong>By Law or to Protect Rights:</strong> If we believe the release of information about you is necessary to respond to legal process, to investigate or remedy potential violations of our policies, or to protect the rights, property, and safety of others.</li>
        <li><strong>Third-Party Service Providers:</strong> We may share your information with third parties that perform services for us or on our behalf, such as hosting, database management, and email delivery.</li>
      </ul>

      <h2>4. Security of Your Information</h2>
      <p>We use administrative, technical, and physical security measures to help protect your personal information. While we have taken reasonable steps to secure the personal information you provide to us, please be aware that despite our efforts, no security measures are perfect or impenetrable, and no method of data transmission can be guaranteed against any interception or other type of misuse.</p>

      <h2>5. Contact Us</h2>
      <p>If you have questions or comments about this Privacy Policy, please contact us at:</p>
      <p style="font-weight: 700; color: var(--ink);">Email: youngchanakyaconnect@gmail.com</p>
    </article>
  </div>
</div>
@endsection
