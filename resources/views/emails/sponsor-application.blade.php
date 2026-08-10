<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New sponsorship Application</title>
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
        <p class="intro">
            A new application has been submitted for a <strong>Young Chanakya X sponsorship</strong>. Below are the details provided by the applicant:
        </p>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email ID</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Company Name</th>
                <td>{{ $company }}</td>
            </tr>
            <tr>
                <th>Designation</th>
                <td>{{ $designation }}</td>
            </tr>
            <tr>
                <th>LinkedIn URL</th>
                <td><a href="{{ $linkedin }}" target="_blank">View LinkedIn Profile</a></td>
            </tr>
            <tr>
                <th>sponsorship Level</th>
                <td>{{ $sponsorship_level }}</td>
            </tr>
            @if(!empty($website))
            <tr>
                <th>Website URL</th>
                <td><a href="{{ $website }}" target="_blank">{{ $website }}</a></td>
            </tr>
            @endif
        </table>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
