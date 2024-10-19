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
                <input type="text" name="title" id="taskInput" placeholder="عنوان تسک جدید">
                <button type="submit">اضافه کردن</button>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            @if (count($tasks) > 0)
        </form>
        <ul class="task-list" id="taskList">
            @foreach ($tasks as $task)
                <li class="task-item {{ $task->is_done ? 'completed' : '' }}">
                    {{ $task->title }}
                    <div class="button-container">
                        <form action="{{ route('tasks_done', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="tick-button">
                                <img src="{{ asset('image/Tick.jpg') }}" alt="انجام شد">
                            </button>
                        </form>
                        <form action="{{ route('tasks_show_update', $task->id) }}" method="GET" style="display:inline;">
                            @csrf
                            <button type="submit" class="update-button">
                                <img src="{{ asset('image/pencil.png') }}" alt="ویرایش">
                            </button>
                        </form>
                        <form action="{{ route('tasks_delete', $task->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button" onclick="return confirm('آیا مطمئن هستید که می‌خواهید این تسک را حذف کنید؟')">
                                <img src="{{ asset('image/trash-can.png') }}" alt="حذف">
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
