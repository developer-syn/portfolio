<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New website inquiry</title>
</head>
<body style="margin: 0; background: #f6f5f0; color: #17211f; font-family: Arial, sans-serif;">
    <div style="max-width: 620px; margin: 0 auto; padding: 40px 20px;">
        <div style="background: #1c302b; color: #d9f56b; padding: 22px 26px;">
            <strong style="font-size: 18px;">Dev-Syn.</strong>
            <span style="float: right; font-size: 12px; letter-spacing: 1px;">NEW INQUIRY</span>    
        </div>

        <div style="background: #ffffff; padding: 30px 26px; border: 1px solid #d8ddd6; border-top: 0;">
            <p style="margin-top: 0; color: #849700; font-size: 12px; letter-spacing: 1px; text-transform: uppercase;">Website project message</p>
            <h1 style="margin: 0 0 24px; font-size: 28px;">{{ $clientMessage->subject }}</h1>

            <p style="line-height: 1.7; white-space: pre-line;">{{ $clientMessage->message }}</p>

            <div style="margin-top: 28px; padding-top: 20px; border-top: 1px solid #d8ddd6; font-size: 14px; line-height: 1.8;">
                <strong>From</strong><br>
                {{ $clientMessage->name }}<br>
                <a href="mailto:{{ $clientMessage->email }}" style="color: #587000;">{{ $clientMessage->email }}</a>
            </div>
        </div>
    </div>
</body>
</html>
