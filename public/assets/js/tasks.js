function addTask() {
    const taskInput = document.getElementById('taskInput');
    const taskList = document.getElementById('taskList');

    if (taskInput.value.trim() === '') {
        alert('لطفاً عنوان تسک را وارد کنید.');
        return;
    }

    const newTask = document.createElement('li');
    newTask.className = 'task-item';
    newTask.textContent = taskInput.value;

    taskList.appendChild(newTask);

    taskInput.value = '';
}
