<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --primary-1: #5f7cff;
            --primary-2: #6c63ff;
            --bg: linear-gradient(135deg, var(--primary-1), var(--primary-2));
        }

        body {
            min-height: 100vh;
            background: var(--bg);
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
        }

        .auth-card {
            background: #ffffff;
            width: 100%;
            max-width: 420px;
            padding: 36px;
            border-radius: 22px;
            box-shadow: 0 20px 45px rgba(0,0,0,.15);
        }

        .auth-title {
            font-weight: 700;
            margin-bottom: 6px;
        }

        .auth-subtitle {
            font-size: 14px;
            color: #777;
            margin-bottom: 26px;
        }

        .form-control {
            border-radius: 14px;
            padding: 12px 14px;
        }

        .form-control:focus {
            box-shadow: 0 0 0 .2rem rgba(108,99,255,.15);
            border-color: var(--primary-2);
        }

        .btn-main {
            background: var(--bg);
            color: #fff;
            border-radius: 14px;
            border: none;
            padding: 12px;
            font-weight: 600;
        }

        .btn-main:hover {
            opacity: .95;
            color: #fff;
        }

        .auth-footer {
            text-align: center;
            margin-top: 20px;
            font-size: 14px;
        }

        .auth-footer a {
            color: var(--primary-2);
            text-decoration: none;
            font-weight: 500;
        }

        .auth-footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    @yield('content')

</body>
</html>