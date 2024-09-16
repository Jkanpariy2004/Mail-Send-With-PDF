<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mail Send</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes slideIn {
            from { transform: translateX(-20px); opacity: 0; }
            to { transform: translateX(0); opacity: 1; }
        }
    </style>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6; margin: 0; padding: 0; background-color: #f4f4f4;">
    <div style="max-width: 600px; margin: 20px auto; background-color: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 0 10px rgba(0,0,0,0.1);">
        <div style="background-color: #3498db; color: #ffffff; padding: 20px; text-align: center; animation: fadeIn 1s;">
            <h1 style="margin: 0;">News App</h1>
        </div>
        <div style="padding: 20px;">
            <p style="font-size: 16px; color: #333333;">You have received a new message:</p>
            <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
                <tr style="background-color: #f8f8f8; animation: slideIn 0.9s;">
                    <th style="padding: 12px; text-align: left; border-bottom: 2px solid #dddddd;">Subject:</th>
                    <td style="padding: 12px; border-bottom: 2px solid #dddddd;">{{ $title }}</td>
                </tr>
                <tr style="background-color: #f8f8f8; animation: slideIn 0.9s;">
                    <th style="padding: 12px; text-align: left; border-bottom: 2px solid #dddddd;">Message</th>
                    <td style="padding: 12px; border-bottom: 2px solid #dddddd;">{{ $body }}</td>
                </tr>
            </table>
        </div>
        <div style="background-color: #3498db; color: #ffffff; padding: 10px; text-align: center; font-size: 14px; animation: fadeIn 1s;">
            <p style="margin: 0;">&copy; {{ date('Y') }} News App. All rights reserved.</p>
        </div>
    </div>
</body>
</html>
