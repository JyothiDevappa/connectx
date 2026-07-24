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
        <div class="greeting">Hi {{ $full_name }},</div>
            <div class="message">
                Thank you for applying to attend the <strong>{{ $event_title }}</strong> session. 
                We have received your details and are currently reviewing applications to ensure strategic alignment for all participants.
                <br><br>
                Our team will reach out to you shortly via email/phone with verification status and join instructions.
            </div>
            
            <div class="details-box">
                <h3>Submission Summary</h3>
                <div class="details-row">
                    <span class="details-label">Applied Event:</span>
                    <span class="details-value"><strong>{{ $event_title }}</strong></span>
                </div>
                <div class="details-row">
                    <span class="details-label">Full Name:</span>
                    <span class="details-value">{{ $full_name }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Email Address:</span>
                    <span class="details-value">{{ $email }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Mobile Number:</span>
                    <span class="details-value">{{ $phone }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Social Media:</span>
                    <span class="details-value">{{ $social_url }}</span>
                </div>
            </div>

            <div class="closing">
                Best regards,<br>
                <strong>Young Chanakya X Team</strong>
            </div>
    </div>
    
    @include('emails.layout.footer')
</div>

</body>
</html>
