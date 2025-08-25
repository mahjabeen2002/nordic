<!DOCTYPE html>
<html>
<head>
    <title>Thank You for Contacting Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            color: #333;
        }
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .header {
            text-align: center;
            padding: 20px 0;
        }
        .header img {
            width: 100px;
        }
        .content {
            text-align: center;
        }
        .content h1 {
            color: #007BFF;
        }
        .content p {
            font-size: 16px;
            line-height: 1.5;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 10px 0;
            font-size: 12px;
            color: #999;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <img rc="{{ asset('assets') }}/img/techlogo.png" alt="TechScout Logo">
        </div>
        <div class="content">
            <h1>Thank You, {{ $name }}</h1>
            <p>We have received your message and will get back to you as soon as possible. Thank you for reaching out to TechScout. Your feedback and inquiries are important to us.</p>
        </div>
        <div class="footer">
            <p>&copy; 2024 TechScout. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
