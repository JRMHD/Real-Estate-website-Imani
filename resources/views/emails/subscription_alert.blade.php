<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Subscription</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
            line-height: 1.6;
            background-color: #ffffff;
            color: #1a1a1a;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        .container {
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(193, 149, 76, 0.1);
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 32px rgba(193, 149, 76, 0.1);
        }

        .header {
            background: linear-gradient(135deg, #C1954C 0%, rgba(193, 149, 76, 0.8) 100%);
            padding: 40px 30px;
            text-align: left;
        }

        .logo {
            font-size: 24px;
            font-weight: 700;
            color: #ffffff;
            margin-bottom: 20px;
            letter-spacing: -0.5px;
        }

        .greeting {
            color: #ffffff;
            font-size: 32px;
            font-weight: 300;
            line-height: 1.4;
            margin-bottom: 10px;
        }

        .sub-greeting {
            color: rgba(255, 255, 255, 0.9);
            font-size: 18px;
            font-weight: 400;
        }

        .content {
            padding: 40px 30px;
            background: rgba(255, 255, 255, 0.95);
        }

        .info-card {
            background: rgba(255, 255, 255, 1);
            border: 1px solid rgba(193, 149, 76, 0.2);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 15px;
        }

        .info-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 20px rgba(193, 149, 76, 0.15);
        }

        .icon {
            font-size: 24px;
            color: #C1954C;
        }

        .label {
            color: #C1954C;
            font-size: 14px;
            font-weight: 600;
            text-transform: uppercase;
            letter-spacing: 1px;
            margin-bottom: 4px;
        }

        .value {
            font-size: 16px;
            color: #1a1a1a;
            font-weight: 400;
        }

        .footer {
            background: #1a1a1a;
            color: rgba(255, 255, 255, 0.7);
            padding: 30px;
            text-align: center;
            font-size: 14px;
        }

        .brand {
            color: #C1954C;
            font-weight: 600;
            font-size: 16px;
            margin-bottom: 10px;
            display: block;
        }

        .app-name {
            color: #ffffff;
            opacity: 0.9;
            font-size: 12px;
            margin-top: 10px;
        }

        @media only screen and (max-width: 480px) {
            body {
                padding: 10px;
            }

            .header {
                padding: 30px 20px;
            }

            .greeting {
                font-size: 28px;
            }

            .content {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <div class="logo">Hello, Faith</div>
            <div class="greeting">New Subscriber!</div>
            <div class="sub-greeting">Someone just joined your community</div>
        </div>

        <div class="content">
            <div class="info-card">
                <div class="icon">✉️</div>
                <div>
                    <div class="label">Subscriber Email</div>
                    <div class="value">{{ $subscription->email }}</div>
                </div>
            </div>
        </div>

        <div class="footer">
            {{-- <span class="brand">Faith</span> --}}
            <div>&copy; {{ date('Y') }} {{ config('app.name', 'Your App Name') }}</div>
            <div class="app-name">Powered by {{ config('app.name', 'Your App Name') }}</div>
        </div>
    </div>
</body>

</html>
