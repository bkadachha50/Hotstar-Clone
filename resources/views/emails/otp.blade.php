<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your OTP Code</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f4f4f4;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            color: #1a73e8;
        }
        .otp-code {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin: 20px 0;
        }
        .expiration {
            font-size: 14px;
            color: #888;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Your OTP Code</h2>
        </div>
        <p>Dear User,</p>
        <p>Thank you for verifying your account. Your OTP code is:</p>
        <div class="otp-code">
            {{ $otp }}
        </div>
        <p class="expiration">This code will expire in 1 minute.</p>
        <p>If you did not request this OTP code, please ignore this email.</p>
        <div class="footer">
            <p>Best Regards,<br>Team {{ config('app.name') }}</p>
        </div>
    </div>
</body>
</html>
