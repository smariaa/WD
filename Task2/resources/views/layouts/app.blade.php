<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Include Tailwind CSS or other assets -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.0.0/dist/tailwind.min.css" rel="stylesheet">

    <!-- Include other styles/scripts as needed -->
</head>
<body>
    <div id="app">
        <!-- Navbar or header can go here -->

        <!-- Main Content -->
        <main>
            @yield('content')
        </main>

        <!-- Footer can go here -->
    </div>

    <!-- Include any scripts if necessary -->
</body>
</html>
