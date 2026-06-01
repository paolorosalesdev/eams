<!DOCTYPE html>
<html>
<head>
    <title>Reset Password - EAMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">

            <div class="card shadow">
                <div class="card-body">

                    <h4 class="text-center mb-4">Reset Password</h4>

                    <form method="POST" action="/reset-password">
                        @csrf

                        <!-- Hidden reset token -->
                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>New Password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label>Confirm Password</label>
                            <input type="password" name="password_confirmation" class="form-control" required>
                        </div>

                        @if ($errors->any())
                            <div class="text-danger mb-2">
                                @foreach ($errors->all() as $error)
                                    <div>{{ $error }}</div>
                                @endforeach
                            </div>
                        @endif

                        <button class="btn btn-success w-100">
                            Reset Password
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