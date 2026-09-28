@extends('layouts.app')

@section('content')

<section class="hero">

    <div class="hero-content">

        <div class="badge">
            Laravel Task Management
        </div>

        <h1>
            Manage your tasks.
            <span>Stay productive.</span>
        </h1>

        <p>
            TaskFlow helps you organize your daily work,
            track your progress, and keep everything in one place.
        </p>

        <div class="hero-buttons">
            <a href="/tasks" class="btn primary">
                View Tasks →
            </a>

            <a href="/about" class="btn secondary">
                Learn More
            </a>
        </div>

    </div>

</section>


<section class="dashboard">

    <div class="section-heading">
        <div>
            <h2>Dashboard</h2>
            <p>Here's an overview of your current tasks.</p>
        </div>
    </div>


    <div class="stats-grid">

        <div class="stat-card">
            <div class="stat-icon blue">✓</div>
            <div>
                <p>Total Tasks</p>
                <h3>12</h3>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon green">✓</div>
            <div>
                <p>Completed</p>
                <h3>7</h3>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon orange">○</div>
            <div>
                <p>Pending</p>
                <h3>5</h3>
            </div>
        </div>


        <div class="stat-card">
            <div class="stat-icon purple">%</div>
            <div>
                <p>Progress</p>
                <h3>58%</h3>
            </div>
        </div>

    </div>


    <div class="tasks-section">

        <div class="section-heading">
            <div>
                <h2>Recent Tasks</h2>
                <p>Your latest activities</p>
            </div>

            <a href="/tasks" class="view-all">
                View all →
            </a>
        </div>


        <div class="task-list">

            <div class="task-item">

                <div class="task-left">
                    <div class="check completed">✓</div>

                    <div>
                        <h3>Complete Laravel project</h3>
                        <p>Application development</p>
                    </div>
                </div>

                <span class="status completed-status">
                    Completed
                </span>

            </div>


            <div class="task-item">

                <div class="task-left">
                    <div class="check completed">✓</div>

                    <div>
                        <h3>Configure Docker containers</h3>
                        <p>Container configuration</p>
                    </div>
                </div>

                <span class="status completed-status">
                    Completed
                </span>

            </div>


            <div class="task-item">

                <div class="task-left">
                    <div class="check pending">○</div>

                    <div>
                        <h3>Configure database</h3>
                        <p>Database configuration</p>
                    </div>
                </div>

                <span class="status pending-status">
                    Pending
                </span>

            </div>


            <div class="task-item">

                <div class="task-left">
                    <div class="check pending">○</div>

                    <div>
                        <h3>Deploy application</h3>
                        <p>Production deployment</p>
                    </div>
                </div>

                <span class="status pending-status">
                    Pending
                </span>

            </div>

        </div>

    </div>

</section>

@endsection
