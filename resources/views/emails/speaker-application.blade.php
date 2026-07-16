<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Speaker Application - Young Chanakya X</title>
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
        .header h1 {
            color: #ffffff;
            font-size: 24px;
            margin: 0;
            font-weight: 600;
            letter-spacing: 0.5px;
        }
        .header p {
            color: #ffca95;
            margin: 5px 0 0;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
        }
        .content {
            padding: 40px;
            line-height: 1.6;
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
        .story-section {
            background-color: #fffaf4;
            border: 1px solid #ffbe8e;
            border-radius: 8px;
            padding: 20px;
            margin-top: 20px;
            font-size: 14.5px;
            line-height: 1.6;
            color: #2c3e50;
        }
        .story-title {
            font-weight: 700;
            color: #0c3a30;
            margin-bottom: 10px;
            font-size: 14px;
            text-transform: uppercase;
        }
        .footer {
            background-color: #f7fafc;
            padding: 20px 40px;
            text-align: center;
            border-top: 1px solid #edf2f7;
        }
        .footer p {
            margin: 0;
            font-size: 13px;
            color: #718096;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>Young Chanakya X</h1>
            <p>New Speaker Application</p>
        </div>
        <div class="content">
            <p style="font-size: 15px; color: #555;">
                A new speaker application has been submitted through the Young Chanakya X website. Below are the applicant's details:
            </p>
            
            <div class="details-box">
                <h3>Applicant Information</h3>
                <div class="details-row">
                    <span class="details-label">Full Name:</span>
                    <span class="details-value">{{ $full_name }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Phone Number:</span>
                    <span class="details-value">{{ $phone }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Email:</span>
                    <span class="details-value">{{ $email ?? '—' }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Location:</span>
                    <span class="details-value">{{ $location }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Primary Role:</span>
                    <span class="details-value">{{ $primary_role }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Speaking Language:</span>
                    <span class="details-value">{{ $speaking_language }}</span>
                </div>
                <div class="details-row">
                    <span class="details-label">Social Media:</span>
                    <span class="details-value"><a href="{{ $social_media_url }}" target="_blank">{{ $social_media_url }}</a></span>
                </div>
            </div>

            <div class="story-section">
                <div class="story-title">Main Message & Story:</div>
                <div style="white-space: pre-line;">{{ $story }}</div>
            </div>
        </div>
        <div class="footer">
            <p>&copy; 2026 Young Chanakya X. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
