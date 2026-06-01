<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password - EAMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body">

                    <h4 class="text-center mb-4">Forgot Password</h4>

                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="/forgot-password">
                        @csrf

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        @error('email')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror

                        <button class="btn btn-primary w-100">
                            Send Reset Link
                        </button>
                    </form>

                    <p class="text-center mt-3">
                        <a href="/login">Back to Login</a>
                    </p>

                </div>
            </div>

        </div>
    </div>
</div>

</body>
</html>