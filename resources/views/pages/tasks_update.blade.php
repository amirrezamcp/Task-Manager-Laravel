@extends('index')

@section('content')
    <div class="container">
        <h1>ویرایش تسک</h1>
        <form action="{{ route('tasks_update', $task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">نام تسک</label>
                <input type="text" class="form-control" id="title" placeholder="نام تسک فعلی: {{ $task->title }}" name="title" required>
            </div>
            <button type="submit" class="btn btn-primary">ذخیره تغییرات</button>
        </form>
    </div>
@endsection
