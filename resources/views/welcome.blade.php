<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Website</title>
    @vite('resources/js/app.js')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>
    <div class="main-container">
        @include('layouts.nav')
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
        <div class="welcome-container">
            <h1>Home page</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam nisl id metus pulvinar, vitae consectetur lectus sodales. Mauris eget justo ut enim commodo faucibus.</p>
            <p>Nulla facilisi. Vivamus vehicula, ex at vestibulum tincidunt, justo lorem pellentesque nunc, id suscipit risus neque a turpis.</p>
        </div>

        @include('layouts.footer')
    </div>

</body>

</html>