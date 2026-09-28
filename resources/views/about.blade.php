@extends('layouts.app')

@section('content')

<section class="page-header">

    <div>
        <div class="badge">About TaskFlow</div>

        <h1>Simple. Organized. Productive.</h1>

        <p>
            TaskFlow is a simple task management application
            created with Laravel and Docker.
        </p>
    </div>

</section>


<section class="about-grid">

    <div class="about-card">

        <div class="large-icon">L</div>

        <h2>Laravel</h2>

        <p>
            Laravel is used as the backend framework of the
            application. Blade templates are used to build
            the user interface.
        </p>

    </div>


    <div class="about-card">

        <div class="large-icon">D</div>

        <h2>Docker</h2>

        <p>
            The application is containerized using Docker,
            separating the application components into
            independent containers.
        </p>

    </div>


    <div class="about-card">

        <div class="large-icon">DB</div>

        <h2>Database</h2>

        <p>
            The application architecture includes a dedicated
            database container for persistent application data.
        </p>

    </div>

</section>


<section class="info-section">

    <h2>Project Architecture</h2>

    <p>
        This project demonstrates how a Laravel web application
        can be organized and deployed using containerization.
        The frontend, backend, and database components can
        operate through Docker networking while persistent
        information is maintained using Docker volumes.
    </p>

</section>

@endsection
