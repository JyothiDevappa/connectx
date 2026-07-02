<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>New Event RSVP Application</title>
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
            color: #ffd2b1;
            margin: 5px 0 0;
            font-size: 14px;
            text-transform: uppercase;
            letter-spacing: 1.5px;
            font-weight: 700;
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
        }
        .footer p {
            margin: 0;
            color: #718096;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>New RSVP Application</h1>
            <p>Young Chanakya X Sessions</p>
        </div>
        <div class="content">
            <p class="intro">
                Hello,
                <br><br>
                A new application has been submitted to attend one of the curated events on the Young Chanakya X portal. Below are the candidate details:
            </p>
            <table class="details-table">
                <tr>
                    <th>Event Title</th>
                    <td><strong>{{ $event_title }}</strong></td>
                </tr>
                <tr>
                    <th>Full Name</th>
                    <td>{{ $full_name }}</td>
                </tr>
                <tr>
                    <th>Email</th>
                    <td><a href="mailto:{{ $email }}">{{ $email }}</a></td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $phone }}</td>
                </tr>
                <tr>
                    <th>Social Media URL</th>
                    <td><a href="{{ $social_url }}" target="_blank">{{ $social_url }}</a></td>
                </tr>
            </table>
        </div>
        <div class="footer">
            <p>&copy; {{ date('Y') }} Young Chanakya X. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
