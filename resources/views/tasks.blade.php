@extends('layouts.app')

@section('content')

<section class="page-header">
    <div>
        <div class="badge">Task Management</div>
        <h1>My Tasks</h1>
        <p>Keep track of your work and manage your daily activities.</p>
    </div>
</section>

<section class="tasks-page">

    @if (session('success'))
        <div style="padding: 12px 16px; margin-bottom: 18px; background: #d1fae5; color: #065f46; border-radius: 8px;">
            {{ session('success') }}
        </div>
    @endif

    @if ($errors->any())
        <div style="padding: 12px 16px; margin-bottom: 18px; background: #fee2e2; color: #991b1b; border-radius: 8px;">
            <ul style="margin: 0; padding-left: 20px;">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div style="padding: 22px; margin-bottom: 28px; border: 1px solid #e5e7eb; border-radius: 12px;">
        <h2 style="margin-top: 0;">Add a New Task</h2>

        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf

            <div style="margin-bottom: 16px;">
                <label for="title" style="display: block; margin-bottom: 6px;">Task Title *</label>
                <input
                    id="title"
                    name="title"
                    type="text"
                    value="{{ old('title') }}"
                    placeholder="Enter task title"
                    maxlength="255"
                    required
                    style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box;"
                >
            </div>

            <div style="margin-bottom: 16px;">
                <label for="description" style="display: block; margin-bottom: 6px;">Description</label>
                <textarea
                    id="description"
                    name="description"
                    rows="3"
                    maxlength="2000"
                    placeholder="Enter task details (optional)"
                    style="width: 100%; padding: 12px; border: 1px solid #d1d5db; border-radius: 8px; box-sizing: border-box;"
                >{{ old('description') }}</textarea>
            </div>

            <button type="submit" class="btn primary">+ Add Task</button>
        </form>
    </div>

    <div class="task-list">
        @forelse ($tasks as $task)
            <div class="task-item">
                <div class="task-left">
                    <div class="check {{ $task->is_completed ? 'completed' : 'pending' }}">
                        {{ $task->is_completed ? '✓' : '○' }}
                    </div>

                    <div>
                        <h3>{{ $task->title }}</h3>
                        <p>{{ $task->description ?: 'No description provided.' }}</p>
                    </div>
                </div>

                <div style="display: flex; align-items: center; gap: 10px; flex-wrap: wrap;">
                    <span class="status {{ $task->is_completed ? 'completed-status' : 'pending-status' }}">
                        {{ $task->is_completed ? 'Completed' : 'Pending' }}
                    </span>

                    <form action="{{ route('tasks.toggle', $task) }}" method="POST">
                        @csrf
                        @method('PATCH')
                        <button type="submit" class="btn">
                            {{ $task->is_completed ? 'Mark Pending' : 'Complete' }}
                        </button>
                    </form>

                    <form
                        action="{{ route('tasks.destroy', $task) }}"
                        method="POST"
                        onsubmit="return confirm('Are you sure you want to delete this task?')"
                    >
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <div style="padding: 28px; text-align: center;">
                <h3>No tasks yet</h3>
                <p>Add your first task using the form above.</p>
            </div>
        @endforelse
    </div>

</section>

@endsection
