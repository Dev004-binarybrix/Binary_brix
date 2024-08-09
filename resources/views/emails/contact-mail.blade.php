<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Information</title>
    <style>
        /* Reset styles */
        body,
        html {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }

        .email-container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 8px;
            align-content: center;
        }

        .email-header {
            background-color: #08a9e6;
            color: white;
            padding: 10px;
            border-radius: 8px 8px 0 0;
            text-align: center;
        }

        .email-body {
            background-color: white;
            padding: 20px;
            border-radius: 0 0 8px 8px;
        }

        .email-body p {
            margin-bottom: 1rem;
            padding-left: 10px;
        }

        .email-body strong {
            color: #333;
            padding-right: 10px;
        }

        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 10px;
            }

            .email-header h2 {
                font-size: 18px;
            }

            .email-body {
                padding: 15px;
            }

            .email-body p {
                font-size: 14px;
            }
        }

        /* Fallback for non-responsive clients */
        .container {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
        }

        .email-body div {
            background-color: #ebf0f1;
            padding: 10px;
            border-radius: 8px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="email-container">
            <div class="email-header">
                <h2>BinaryBrix - New Contact Us Request from Customer</h2>
            </div>
            <div class="email-body">
                <div>
                    <p><strong>Name:</strong> {{ $data['name'] }}</p>
                    <p><strong>Email:</strong> {{ $data['email'] }}</p>
                    <p><strong>Phone Number:</strong> {{ $data['phone'] }}</p>
                    <p><strong>Company:</strong> {{ $data['company'] }}</p>
                    <p><strong>Job Title:</strong> {{ $data['job'] }}</p>
                    <p><strong>Hear About Us through:</strong> {{ $data['hear_about_us'] }}</p>
                </div>
                <div>
                    <p><strong>Message from Customer:</strong></p>
                    <p>{{ $data['message'] }}</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
