<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Speaker Application - Young Chanakya X</title>
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
        <p style="font-size: 15px; color: #555;">
                A new application has been submitted for Becoming a Speaker(YCX Talks) at Young Chanakya X. Below are the applicant's details:
            </p>
            
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $full_name }}</td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Email ID</th>
                <td>@if(!empty($email))<a href="mailto:{{ $email }}">{{ $email }}</a>@else—@endif</td>
            </tr>
            <tr>
                <th>Location</th>
                <td>{{ $location }}</td>
            </tr>
            <tr>
                <th>Primary Role</th>
                <td>{{ $primary_role }}</td>
            </tr>
            <tr>
                <th>Speaking Language</th>
                <td>{{ $speaking_language }}</td>
            </tr>
            <tr>
                <th>Social Media</th>
                <td><a href="{{ $social_media_url }}" target="_blank">View Profile</a></td>
            </tr>
        </table>

        @if(!empty($story))
        <div class="bio-section">
            <h3>Main Message & Story</h3>
            <p>{{ $story }}</p>
        </div>
        @endif
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
