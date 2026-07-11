<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Aplikasi Movie</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        /* FIX SVG PAGINATION */
        svg {
            width: 20px !important;
            height: 20px !important;
        }

        body {
            background: #f5f5f5;
        }

        .container {
            background: white;
            padding: 30px;
            border-radius: 10px;
            margin-top: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            background: white;
        }
    </style>

</head>

<body>

    <div class="container">

        @yield('content')

    </div>

</body>

</html>
