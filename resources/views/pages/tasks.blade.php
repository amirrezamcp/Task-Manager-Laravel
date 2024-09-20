@extends('index')

@section('content')
    <div class="content">
        <h2>لیست تسک‌ها</h2>
        <form action="#" method="POST" id="taskForm">
            @csrf
            <div class="add-task">
                <input type="text" id="taskInput" placeholder="عنوان تسک جدید">
                <button onclick="addTask()">اضافه کردن</button>
            </div>
            <ul class="task-list" id="taskList">
                @foreach ($tasks as $task)
                <li class="task-item"> {{ $task->title }} </li>
                @endforeach
            </ul>
        </form>
    </div>
    <script src="{{ asset('asset/js/tasks.js') }}"></script>
@endsection