<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Inquiry Received</title>
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
            A new inquiry has been submitted through the <strong>Young Chanakya X Contact Form</strong>. Below are the details provided:
        </p>
        
        <table class="details-table">
            <tr>
                <th>Full Name</th>
                <td>{{ $name }}</td>
            </tr>
            <tr>
                <th>Email Address</th>
                <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
            </tr>
            <tr>
                <th>Phone Number</th>
                <td>{{ $phone }}</td>
            </tr>
            <tr>
                <th>Message</th>
                <td style="white-space: pre-wrap;">{{ $user_message }}</td>
            </tr>
            @if(!empty($subject))
            <tr>
                <th>Subject</th>
                <td>{{ $subject }}</td>
            </tr>
            @endif
        </table>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>

</body>
</html>
