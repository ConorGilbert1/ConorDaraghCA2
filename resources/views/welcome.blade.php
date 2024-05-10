<!-- resources/views/welcome.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Your Website</title>
    @vite('resources/js/app.js')

</head>

<body>
    @include('layouts.app')

    <div class="container">
        <h1>Welcome to Your Website</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed aliquam nisl id metus pulvinar, vitae consectetur lectus sodales. Mauris eget justo ut enim commodo faucibus.</p>
        <p>Nulla facilisi. Vivamus vehicula, ex at vestibulum tincidunt, justo lorem pellentesque nunc, id suscipit risus neque a turpis.</p>
    </div>

    
</body>

</html>