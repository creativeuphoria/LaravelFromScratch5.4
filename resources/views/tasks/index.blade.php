<h1>{{ $pageName }}</h1>
@if (count($taskList) > 0)
    <ul>
    @foreach ($taskList as $listItem)
        <li>{{ $listItem->title }}</li>
    @endforeach
    </ul>
@else
    <strong>No tasks to display.</strong>
@endif