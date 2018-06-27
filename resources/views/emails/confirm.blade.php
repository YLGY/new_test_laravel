<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register Confirmation</title>
</head>
<body>
    <h1>Thank you for registing at Sample website</h1>

    <p>
        Please click the following link to complete registration:
        <a href="{{ route('confirm_email', $user->activation_token) }}">
            {{ route('confirm_email', $user->activation_token) }}
        </a>
    </p>

    <p>
        If this email delivery to the wrong address, please ignore it.
    </p>
</body>
</html>