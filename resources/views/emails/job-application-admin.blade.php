<!DOCTYPE html>
<html>
<head>
    <title>New Job Application</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; color: #333333; max-width: 600px; margin: 0 auto; padding: 20px;">
    <div style="background-color: #0c3a30; padding: 20px; text-align: center; border-radius: 8px 8px 0 0;">
        <h1 style="color: #ffffff; margin: 0; font-size: 24px;">New Job Application</h1>
        <p style="color: #ffd2b1; margin: 5px 0 0 0; font-size: 14px; font-weight: bold;">{{ strtoupper($category) }}</p>
    </div>
    
    <div style="padding: 20px; border: 1px solid #dddddd; border-top: none; border-radius: 0 0 8px 8px; background-color: #ffffff;">
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
    
    <div style="margin-top: 20px; text-align: center; font-size: 12px; color: #999999;">
        This email was sent from the career application form on Young Chanakya X.
    </div>
</body>
</html>
