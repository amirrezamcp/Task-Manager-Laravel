@extends('index')

@section('content')
    <div class="content">
        <h2>لیست تسک‌ها</h2>
        <div class="add-task">
            <input type="text" id="taskInput" placeholder="عنوان تسک جدید">
            <button onclick="addTask()">اضافه کردن</button>
        </div>
        <ul class="task-list" id="taskList">
            <li class="task-item">تسک 1</li>
            <li class="task-item">تسک 2</li>
            <li class="task-item">تسک 3</li>
            <li class="task-item">تسک 4</li>
            <li class="task-item">تسک 5</li>
            <li class="task-item">تسک 6</li>
            <li class="task-item">تسک 7</li>
            <li class="task-item">تسک 8</li>
            <li class="task-item">تسک 9</li>
            <li class="task-item">تسک 10</li>
        </ul>
    </div>
@endsection