<!-- resources/views/success.blade.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div class="container vh-100 py-5">
        <div class="row h-100 align-items-center justify-content-center">
            <div class="col col-10 col-md-9 col-lg-7 col-xl-6">
                <div class="text-center bg-success text-white p-3">
                    <h1>Welcome to homepage</h1>
                </div>

                <h3 class="mt-4">Submitted Data:</h3>
                <ul class="list-unstyled">
                    <li class="mb-3"><strong>Name:</strong> {{ $data['name'] }}</li>
                    <li class="mb-3"><strong>Email:</strong> {{ $data['email'] }}</li>
                </ul>

                <div class="d-flex justify-content-center">
                    <a href="{{ url('/register') }}" class="btn btn-info mt-4">Back to Registration</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS & Popper.js (optional but recommended for interactive elements like tooltips, modals, etc.) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>