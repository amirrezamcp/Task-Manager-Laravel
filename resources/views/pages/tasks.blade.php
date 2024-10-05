@extends('index')

@section('content')
    <div class="content">
        <h2>لیست تسک‌ها</h2>
        @if (Session::has('success'))
            <div class="success-message">
                <span>
                    {!! Session::get('success') !!}
                </span>
            </div>  
        @endif
        <form action="{{ route('tasks_add') }}" method="POST" id="taskForm">
            @csrf
            <div class="add-task">
                <input type="text" name="title" id="taskInput" placeholder="عنوان تسک جدید" required>
                <button type="submit">اضافه کردن</button>
                @error('title')
                <span style="color: red"> {{ $message }} </span>
                @enderror
            </div>
            @if (count($tasks) > 0)
        </form>
        <ul class="task-list" id="taskList">
            @foreach ($tasks as $task)
                <li class="task-item">
                    {{ $task->title }}
                    <div class="button-container">
                        <form action="{{ route('tasks_show_update', $task->id) }}" method="GET" style="display:inline;">
                            <button type="submit" class="update-button">
                                <img src="{{ asset('assets/image/pencil.png') }}" alt="ویرایش">
                            </button>
                        </form>
                        <form action="{{ route('tasks_delete', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این تسک را حذف کنید؟')">
                                <img src="{{ asset('assets/image/trash-can.png') }}" alt="حذف">
                            </button>
                        </form>
                    </div>
                </li>
            @endforeach
        </ul>
        @else
            <p class="no-task-message">تسکی وجود ندارد</p>
        @endif
    </div>
@endsection
