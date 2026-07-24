<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Job Application</title>
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
        <h2 style="color: #0c3a30; border-bottom: 1px solid #eeeeee; padding-bottom: 8px;">Role: {{ $job_title }}</h2>
        
        <table style="width: 100%; border-collapse: collapse; margin-top: 15px;">
            <tr>
                <td style="padding: 8px 0; font-weight: bold; width: 140px; border-bottom: 1px solid #f9f9f9;">Applicant:</td>
                <td style="padding: 8px 0; border-bottom: 1px solid #f9f9f9;">{{ $first_name }} {{ $last_name }}</td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: bold; border-bottom: 1px solid #f9f9f9;">Email:</td>
                <td style="padding: 8px 0; border-bottom: 1px solid #f9f9f9;"><a href="mailto:{{ $email }}" style="color: #0c3a30; text-decoration: none;">{{ $email }}</a></td>
            </tr>
            <tr>
                <td style="padding: 8px 0; font-weight: bold; border-bottom: 1px solid #f9f9f9;">Phone:</td>
                <td style="padding: 8px 0; border-bottom: 1px solid #f9f9f9;">{{ $phone }}</td>
            </tr>
            @if(!empty($linkedin_url))
            <tr>
                <td style="padding: 8px 0; font-weight: bold; border-bottom: 1px solid #f9f9f9;">LinkedIn Profile:</td>
                <td style="padding: 8px 0; border-bottom: 1px solid #f9f9f9;"><a href="{{ $linkedin_url }}" target="_blank" style="color: #0c3a30; text-decoration: none;">{{ $linkedin_url }}</a></td>
            </tr>
            @endif
            @if(!empty($resume_url))
            <tr>
                <td style="padding: 8px 0; font-weight: bold; border-bottom: 1px solid #f9f9f9;">Resume Link:</td>
                <td style="padding: 8px 0; border-bottom: 1px solid #f9f9f9;"><a href="{{ $resume_url }}" target="_blank" style="color: #0c3a30; text-decoration: none; font-weight: bold;">View Resume</a></td>
            </tr>
            @endif
        </table>
        
        <div style="margin-top: 25px; padding: 15px; background-color: #fcfcfc; border-left: 4px solid #0c3a30; border-radius: 4px;">
            <h4 style="margin: 0 0 10px 0; color: #0c3a30;">Why YCX & Why this role?</h4>
            <p style="margin: 0; white-space: pre-line; font-size: 14px; color: #555555;">{{ $cover_letter }}</p>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
