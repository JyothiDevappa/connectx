<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Contact Inquiry Received - Young Chanakya X</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f6f9;
            color: #333333;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
        }
        .container {
            max-width: 600px;
            margin: 30px auto;
            background-color: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            border: 1px solid #e1e5eb;
        }
        .header {
            background-color: #0c3a30;
            padding: 30px 40px;
            text-align: center;
        }
        .header img {
            max-height: 45px;
            display: inline-block;
        }
        .content {
            padding: 40px;
            line-height: 1.6;
        }
        .greeting {
            font-size: 18px;
            font-weight: 600;
            color: #0c3a30;
            margin-bottom: 15px;
        }
        .message {
            font-size: 15px;
            color: #555555;
            margin-bottom: 30px;
        }
        .details-box {
            background-color: #f7fafc;
            border: 1px solid #edf2f7;
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
        .details-box h3 {
            margin-top: 0;
            color: #0c3a30;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 15px;
            border-bottom: 1px solid #edf2f7;
            padding-bottom: 10px;
        }
        .details-row {
            display: flex;
            margin-bottom: 10px;
            font-size: 14px;
        }
        .details-label {
            width: 40%;
            font-weight: 600;
            color: #4a5568;
        }
        .details-value {
            width: 60%;
            color: #2d3748;
        }
        .closing {
            font-size: 15px;
            color: #555555;
            border-top: 1px solid #edf2f7;
            padding-top: 20px;
        }
        .footer {
            background-color: #f7fafc;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #edf2f7;
            font-size: 12px;
            color: #a0aec0;
        }
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
            Thank you for reaching out to us. We have successfully received your inquiry submitted via our contact form.
            <br><br>
            A representative from the Young Chanakya X team will review your message and get back to you shortly.
        </div>
        
        <div class="details-box">
            <h3>Submission Summary</h3>
            <div class="details-row">
                <div class="details-label">Name</div>
                <div class="details-value">{{ $name }}</div>
            </div>
            <div class="details-row">
                <div class="details-label">Email</div>
                <div class="details-value">{{ $email }}</div>
            </div>
            <div class="details-row">
                <div class="details-label">Phone Number</div>
                <div class="details-value">{{ $phone }}</div>
            </div>
            @if(!empty($subject))
            <div class="details-row">
                <div class="details-label">Subject</div>
                <div class="details-value">{{ $subject }}</div>
            </div>
            @endif
        </div>
        
        <div class="closing">
            Best regards,<br>
            <strong>Young Chanakya X Team</strong>
        </div>
    </div>
    
    <div class="footer" style="background-color: #0c3a30; padding: 40px 20px; text-align: center; border-top: 1px solid rgba(255,255,255,0.1); color: #ffffff; font-family: sans-serif;">
        <div style="margin-bottom: 25px; text-align: center;">
            <a href="https://www.facebook.com/youngchanakya" style="display: inline-block; width: 36px; height: 36px; background-color: #ffeada; border-radius: 50%; text-align: center; margin: 0 4px; vertical-align: middle;">
                <img src="https://img.icons8.com/ios-filled/50/0c3a30/facebook-new.png" alt="FB" style="width: 18px; height: 18px; margin-top: 9px; display: inline-block;">
            </a>
            <a href="https://www.instagram.com/youngchanakya" style="display: inline-block; width: 36px; height: 36px; background-color: #ffeada; border-radius: 50%; text-align: center; margin: 0 4px; vertical-align: middle;">
                <img src="https://img.icons8.com/ios-filled/50/0c3a30/instagram-new.png" alt="IG" style="width: 18px; height: 18px; margin-top: 9px; display: inline-block;">
            </a>
            <a href="https://www.youtube.com/@youngchanakya" style="display: inline-block; width: 36px; height: 36px; background-color: #ffeada; border-radius: 50%; text-align: center; margin: 0 4px; vertical-align: middle;">
                <img src="https://img.icons8.com/ios-filled/50/0c3a30/youtube-play.png" alt="YT" style="width: 18px; height: 18px; margin-top: 9px; display: inline-block;">
            </a>
            <a href="https://twitter.com/youngchanakya" style="display: inline-block; width: 36px; height: 36px; background-color: #ffeada; border-radius: 50%; text-align: center; margin: 0 4px; vertical-align: middle;">
                <img src="https://img.icons8.com/ios-filled/50/0c3a30/twitterx.png" alt="X" style="width: 16px; height: 16px; margin-top: 10px; display: inline-block;">
            </a>
            <a href="https://www.linkedin.com/company/youngchanakya" style="display: inline-block; width: 36px; height: 36px; background-color: #ffeada; border-radius: 50%; text-align: center; margin: 0 4px; vertical-align: middle;">
                <img src="https://img.icons8.com/ios-filled/50/0c3a30/linkedin.png" alt="IN" style="width: 18px; height: 18px; margin-top: 9px; display: inline-block;">
            </a>
        </div>
        
        <div style="margin-bottom: 20px; font-size: 13px; line-height: 1.8; color: #ffffff;">
            <a href="https://connectx.youngchanakya.com/about" style="color: #ffffff; text-decoration: none;">About</a> &nbsp;|&nbsp; 
            <a href="https://connectx.youngchanakya.com/become-a-partner" style="color: #ffffff; text-decoration: none;">Become a Partner</a> &nbsp;|&nbsp; 
            <a href="https://connectx.youngchanakya.com/become-a-sponser" style="color: #ffffff; text-decoration: none;">Become a sponser</a> &nbsp;|&nbsp; 
            <a href="https://connectx.youngchanakya.com/contact" style="color: #ffffff; text-decoration: none;">Connect with YCX</a>
        </div>
        
        <div style="margin-bottom: 15px; font-size: 13px; color: #ffffff; opacity: 0.85;">
            Copyright &copy; 2026. All rights reserved by Young Chanakya
        </div>
        
        <div style="font-size: 12px; line-height: 1.8; color: #ffffff;">
            <a href="https://connectx.youngchanakya.com/privacy-policy" style="color: #ffffff; text-decoration: none; opacity: 0.7;">Privacy Policy</a> &nbsp;|&nbsp; 
            <a href="https://connectx.youngchanakya.com/terms-and-conditions" style="color: #ffffff; text-decoration: none; opacity: 0.7;">Terms and Conditions</a>
        </div>
    </div>
</div>

</body>
</html>
