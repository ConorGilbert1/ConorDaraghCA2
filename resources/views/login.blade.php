<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">

        @include('layouts.nav')
        <div class="login-container">
                <div class="login-form">
                    <h2 >Login</h2>
                    <form >
                        @csrf
                        <div class="login-input">
                            <label for="username">Username:</label>
                            <input type="username" class="login-control" id="username" name="username" required>
                        </div>
                        <div class="login-input">
                            <label for="password">Password:</label>
                            <input type="password" class="login-control" id="password" name="password" required>
                        </div>
                        <button type="submit">Login</button>
                    </form>
                    <p >Don't have an account? <a href="/register">Register</a></p>
                </div>
            </div>
        </div>
   
</body>
</html>