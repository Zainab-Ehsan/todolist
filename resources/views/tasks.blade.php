@extends('layouts.app')

@section('content')

<section class="page-header">

    <div>
        <div class="badge">Task Management</div>

        <h1>My Tasks</h1>

        <p>
            Keep track of your work and manage your daily activities.
        </p>
    </div>

    <button class="btn primary">
        + Add Task
    </button>

</section>


<section class="tasks-page">

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
                    <h3>Test application</h3>
                    <p>Application testing</p>
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

</section>

@endsection
