<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You - Real Estate AI Agent</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <style>
        .thank-you-section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #0f172a 0%, #1e40af 100%);
            padding: 40px 20px;
        }

        .thank-you-content {
            background: white;
            padding: 60px;
            border-radius: 20px;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            text-align: center;
            max-width: 600px;
            animation: fadeInScale 0.5s ease-out;
        }

        @keyframes fadeInScale {
            from {
                opacity: 0;
                transform: scale(0.9);
            }
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .checkmark {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            background: #10b981;
            margin: 0 auto 30px;
            display: flex;
            align-items: center;
            justify-content: center;
            animation: scaleIn 0.5s ease-out 0.2s both;
        }

        @keyframes scaleIn {
            from {
                transform: scale(0);
            }
            to {
                transform: scale(1);
            }
        }

        .checkmark svg {
            width: 40px;
            height: 40px;
            stroke: white;
            stroke-width: 3;
            stroke-linecap: round;
            stroke-linejoin: round;
            fill: none;
            animation: drawCheck 0.5s ease-out 0.4s both;
        }

        @keyframes drawCheck {
            from {
                stroke-dasharray: 100;
                stroke-dashoffset: 100;
            }
            to {
                stroke-dasharray: 100;
                stroke-dashoffset: 0;
            }
        }

        .thank-you-content h1 {
            color: var(--secondary-color);
            margin-bottom: 20px;
            font-size: 2.5rem;
        }

        .thank-you-content p {
            font-size: 1.125rem;
            color: var(--text-light);
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .next-steps {
            background: var(--bg-light);
            padding: 30px;
            border-radius: 12px;
            margin: 30px 0;
            text-align: left;
        }

        .next-steps h3 {
            color: var(--primary-color);
            margin-bottom: 16px;
            font-size: 1.25rem;
        }

        .next-steps ul {
            list-style: none;
            padding: 0;
        }

        .next-steps li {
            padding: 12px 0;
            border-bottom: 1px solid var(--border-color);
            display: flex;
            align-items: start;
            color: var(--text-dark);
        }

        .next-steps li:last-child {
            border-bottom: none;
        }

        .next-steps li::before {
            content: '✓';
            color: var(--success-color);
            font-weight: bold;
            margin-right: 12px;
            font-size: 1.25rem;
        }

        .button-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .thank-you-content {
                padding: 40px 30px;
            }

            .thank-you-content h1 {
                font-size: 2rem;
            }

            .button-group {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <section class="thank-you-section">
        <div class="thank-you-content">
            <div class="checkmark">
                <svg viewBox="0 0 50 50">
                    <polyline points="10,25 20,35 40,15" />
                </svg>
            </div>

            <?php
            $name = isset($_GET['name']) ? htmlspecialchars($_GET['name']) : 'there';
            ?>

            <h1>Thank You<?php echo !empty($name) && $name !== 'there' ? ', ' . $name : ''; ?>!</h1>

            <p>We've received your request for a free demo of our Real Estate AI Agent.</p>

            <div class="next-steps">
                <h3>What Happens Next?</h3>
                <ul>
                    <li>Our team will review your information within the next 24 hours</li>
                    <li>We'll reach out to schedule your personalized demo at a time that works for you</li>
                    <li>You'll see firsthand how the AI Agent can transform your real estate business</li>
                    <li>We'll answer any questions and discuss implementation options</li>
                </ul>
            </div>

            <p><strong>In the meantime, check your email for a confirmation message.</strong></p>

            <div class="button-group">
                <a href="landing-page.php" class="btn btn-primary">Back to Home</a>
            </div>
        </div>
    </section>
</body>
</html>
