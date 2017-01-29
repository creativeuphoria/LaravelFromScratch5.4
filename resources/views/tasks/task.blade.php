<h1>{{ $pageName }}</h1>
@if (count($task) > 0)
    <ul>
        <li>{{ $task->title }}</li>
    </ul>
@else
    <strong>No task to display.</strong>
@endif