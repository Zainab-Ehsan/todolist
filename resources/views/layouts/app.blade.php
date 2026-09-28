<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'TaskFlow' }}</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar">
        <div class="nav-container">

            <a href="/" class="logo">
                <span class="logo-icon">✓</span>
                TaskFlow
            </a>

            <div class="nav-links">
                <a href="/" class="{{ request()->is('/') ? 'active' : '' }}">
                    Dashboard
                </a>

                <a href="/tasks" class="{{ request()->is('tasks') ? 'active' : '' }}">
                    Tasks
                </a>

                <a href="/about" class="{{ request()->is('about') ? 'active' : '' }}">
                    About
                </a>

                <a href="/contact" class="{{ request()->is('contact') ? 'active' : '' }}">
                    Contact
                </a>
            </div>

        </div>
    </nav>


    <main>
        @yield('content')
    </main>


    <footer>
        <div class="footer-container">

            <div>
                <h3>TaskFlow</h3>
                <p>
                    A simple Laravel task management application.
                </p>
            </div>

            <div class="footer-right">
                <p>Built with Laravel & Docker</p>
                <p>© {{ date('Y') }} TaskFlow</p>
            </div>

        </div>
    </footer>

</body>
</html>

