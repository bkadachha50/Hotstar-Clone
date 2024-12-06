<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Activate Your Account</title>
</head>
<body>
    <div style="font-family: Arial, sans-serif; color: #333; padding: 20px;">
        <h2 style="color: #1a73e8;">Hello, {{ $data['name'] }}</h2>
        <p>Thank you for registering with us. We are excited to have you on board!</p>
        <p>Please click the link below to activate your account and get started:</p>
        <a href="{{ url('activate/' . $data['token']) }}" 
           style="background-color: #1a73e8; color: white; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            Activate Account
        </a>
        <p>If you did not register with us, please ignore this email.</p>
        <p>Best Regards,<br>Team Mx Player</p>
    </div>
</body>
</html>
