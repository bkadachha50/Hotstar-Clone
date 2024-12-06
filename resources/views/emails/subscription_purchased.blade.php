<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Confirmation</title>
    <style>
        /* General Reset */
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            color: #444;
        }
        .email-container {
            max-width: 650px;
            margin: 30px auto;
            background: linear-gradient(135deg, #ffffff, #f3f7ff);
            border: 1px solid #e0e4f2;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }
        .email-header {
            background: linear-gradient(90deg, #4e73df, #6b92f4);
            padding: 30px;
            text-align: center;
            color: #ffffff;
        }
        .email-header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }
        .email-body {
            padding: 25px 30px;
            line-height: 1.8;
        }
        .email-body p {
            margin: 10px 0;
            font-size: 16px;
        }
        .highlight {
            color: #4e73df;
            font-weight: bold;
        }
        .button-container {
            text-align: center;
            margin: 30px 0;
        }
        .btn {
            display: inline-block;
            background: #4e73df;
            color: #ffffff;
            text-decoration: none;
            padding: 12px 20px;
            font-size: 16px;
            font-weight: bold;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: background 0.3s, transform 0.2s;
        }
        .btn:hover {
            background: #3b5ecf;
            transform: translateY(-3px);
        }
        .email-footer {
            background: #f4f6fc;
            text-align: center;
            padding: 15px;
            font-size: 14px;
            color: #7a869c;
            border-top: 1px solid #e0e4f2;
        }
        .email-footer p {
            margin: 5px 0;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <!-- Header -->
        <div class="email-header">
            <h1>Welcome to Your Subscription!</h1>
        </div>

        <!-- Body -->
        <div class="email-body">
            <p>Hi <span class="highlight">{{ $details['name'] }}</span>,</p>
            <p>We’re excited to let you know that your subscription to the <span class="highlight">{{ $details['plan_name'] }}</span> plan is now active!</p>
            <p>You’ve been charged <span class="highlight">${{ number_format($details['amount'], 2) }}</span> for this plan, which will be valid until <span class="highlight">{{ $details['expiry_date'] }}</span>.</p>
            <p>Thank you for choosing our service! We’re here to ensure you have the best experience possible.</p>
            <div class="button-container">
                <a href="{{ url('/') }}" class="btn">Go to Dashboard</a>
            </div>
            <p>If you have any questions or need assistance, feel free to reach out to our support team at <span class="highlight">support@example.com</span>.</p>
        </div>

        <!-- Footer -->
        <div class="email-footer">
            <p>&copy; {{ date('Y') }} Mx Player. All rights reserved.</p>
            <p>Follow us on <a href="#" style="color: #4e73df; text-decoration: none;">Social Media</a>.</p>
        </div>
    </div>
</body>
</html>