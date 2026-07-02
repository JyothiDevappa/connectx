<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Contact Inquiry Received</title>
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
        }
        .intro {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 30px;
            color: #555555;
        }
        .details-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        .details-table th, .details-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #edf2f7;
            vertical-align: top;
        }
        .details-table th {
            width: 35%;
            color: #0c3a30;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            background-color: #f7fafc;
        }
        .details-table td {
            color: #2d3748;
            font-size: 15px;
        }
        .details-table td a {
            color: #0c3a30;
            text-decoration: underline;
            font-weight: 600;
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
            @if(!empty($subject))
            <tr>
                <th>Subject</th>
                <td>{{ $subject }}</td>
            </tr>
            @endif
            <tr>
                <th>Message</th>
                <td style="white-space: pre-wrap;">{{ $message }}</td>
            </tr>
        </table>
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
            <a href="https://connectx.youngchanakya.com/become-a-sponser" style="color: #ffffff; text-decoration: none;">Become a Sponsor</a> &nbsp;|&nbsp; 
            <a href="https://connectx.youngchanakya.com/contact" style="color: #ffffff; text-decoration: none;">Connect with YCX</a>
        </div>
        
        <div style="margin-bottom: 15px; font-size: 13px; color: #ffffff; opacity: 0.85;">
            Copyright &copy; 2026. All rights reserved by Young Chanakya
        </div>
    </div>
</div>

</body>
</html>
