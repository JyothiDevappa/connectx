<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Application Received - Young Chanakya X</title>
    <style>
        @include('emails.layout.styles')
    </style>
</head>
<body>

<div class="container">
    <div class="header">
        <img src="https://connectx.youngchanakya.com/images/logo/logo.png" alt="Young Chanakya X">
    </div>
    
    <div class="content">
        <p>Dear {{ $first_name }},</p>
        
        <p>Thank you for submitting your application for the position of <strong>{{ $job_title }}</strong> at Young Chanakya X.</p>
        
        <p>Our team is currently reviewing your profile, background, and answers. If your qualifications match our current needs, we will reach out to you within <strong>5–7 working days</strong> to schedule an initial interview.</p>
        
        <p>We appreciate your interest in joining Young Chanakya X and helping us build a thriving creator community.</p>
        
        <p style="margin-top: 30px; font-weight: bold;">Best regards,<br>The Recruitment Team<br>Young Chanakya X</p>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
