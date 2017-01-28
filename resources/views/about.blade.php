<h1>Welcome to the {{ $pageName }} page</h1>
<h2>To-do list</h2>
<ul>
@foreach ($todoList as $listItem)
    <li>{{ $listItem }}</li>
@endforeach
</ul>