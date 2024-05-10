<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/js/app.js')
    <title>Register</title>
</head>
<body>
    <div class="register-container">
        @include('layouts.nav')
                <div class="register-form">
                    <h2 >Register</h2>
                    <form >
                        @csrf
                        <div class="register-input">
                            <label for="username">Username:</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="register-input">
                            <label for="email">Email:</label>
                            <input type="email" class="register-control" id="email" name="email" required>
                        </div>
                        <div class="register-input">
                            <label for="password">Password:</label>
                            <input type="password" class="register-control" id="password" name="password" required>
                        </div>
                        <div class="register-input">
                            <label for="password_confirmation">Confirm Password:</label>
                            <input type="password" class="register-control" id="password_confirmation" name="password_confirmation" required>
                        </div>
                        <button type="submit">Register</button>
                    </form>
                    <p >Already have an account? <a href="/login">Login</a></p>
                </div>
        </div>
</body>
</html>