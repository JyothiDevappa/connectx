<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>sponsership Application Received - Young Chanakya X</title>
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
        <div class="greeting">Hello {{ $name }},</div>
        
        <div class="message">
            Thank you for your interest in becoming a <strong>Young Chanakya X sponser</strong>.
            <br><br>
            Our team has received your sponsership inquiry. We appreciate your support for our ecosystem. Our sponsership team will review your details and contact you shortly with customized opportunities and next steps.
        </div>
        
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
                <th>Sponsorship Level</th>
                <td>{{ $sponsership_level }}</td>
            </tr>
            @if(!empty($website))
            <tr>
                <th>Website URL</th>
                <td><a href="{{ $website }}" target="_blank">{{ $website }}</a></td>
            </tr>
            @endif
        </table>
        
        <div class="closing">
            Best regards,<br>
            <strong>Young Chanakya X Team</strong>
        </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
