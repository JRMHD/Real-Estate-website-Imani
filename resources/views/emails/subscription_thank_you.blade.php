<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to out Newsletter</title>
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
            text-align: center;
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
            max-width: 440px;
            margin: 0 auto;
        }

        .content {
            padding: 40px 30px;
            background: rgba(255, 255, 255, 0.95);
            text-align: center;
        }

        .welcome-card {
            background: rgba(255, 255, 255, 1);
            border: 1px solid rgba(193, 149, 76, 0.2);
            border-radius: 12px;
            padding: 30px;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }

        .welcome-icon {
            font-size: 48px;
            margin-bottom: 20px;
        }

        .welcome-text {
            color: #1a1a1a;
            font-size: 16px;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .benefits {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 30px;
            flex-wrap: wrap;
        }

        .benefit-item {
            background: rgba(193, 149, 76, 0.05);
            border-radius: 8px;
            padding: 15px;
            flex: 1;
            min-width: 140px;
            text-align: center;
        }

        .benefit-icon {
            font-size: 24px;
            color: #C1954C;
            margin-bottom: 10px;
        }

        .benefit-text {
            font-size: 14px;
            color: #1a1a1a;
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

            .benefits {
                flex-direction: column;
            }

            .benefit-item {
                width: 100%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">

            <div class="greeting">Welcome to Our Community! 🎉</div>
            <div class="sub-greeting">Thank you for subscribing to our newsletter</div>
        </div>

        <div class="content">
            <div class="welcome-card">
                <div class="welcome-icon">✨</div>
                <div class="welcome-text">
                    We're excited to have you join our community! You'll be the first to receive our latest updates,
                    exclusive offers, and inspiring content.
                </div>

                <div class="benefits">
                    <div class="benefit-item">
                        <div class="benefit-icon">📰</div>
                        <div class="benefit-text">Latest News</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">🎁</div>
                        <div class="benefit-text">Special Offers</div>
                    </div>
                    <div class="benefit-item">
                        <div class="benefit-icon">💡</div>
                        <div class="benefit-text">Exclusive Content</div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">

            <div>&copy; {{ date('Y') }} {{ config('app.name', 'Your App Name') }}</div>
            <div class="app-name">Powered by {{ config('app.name', 'Your App Name') }}</div>
        </div>
    </div>
</body>

</html>
