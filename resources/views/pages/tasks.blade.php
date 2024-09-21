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
        </form>
        <ul class="task-list" id="taskList">
            @foreach ($tasks as $task)
                <li class="task-item">
                    {{ $task->title }}
                    <form action=" {{ route('tasks_delete') }} " method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این تسک را حذف کنید؟')">
                            <img src="{{ asset('assets/image/trash-can.png') }}" alt="حذف">
                        </button>
                    </form>
                </li>
            @endforeach
        </ul>
    </div>
@endsection
