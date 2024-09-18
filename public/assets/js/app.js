let loggedIn = false;

function login(event) {
    event.preventDefault();
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    // اینجا می‌توانید اعتبارسنجی را اضافه کنید
    if (username && password) {
        loggedIn = true;
        alert('ورود موفقیت‌آمیز!');
        window.location.href = '/'; // پس از ورود به صفحه اصلی بروید
    }
}

function logout() {
    loggedIn = false;
    alert('خروج موفقیت‌آمیز!');
    window.location.href = '/login'; // به صفحه لاگین برگردید
}

function addTask() {
    const taskInput = document.getElementById('taskInput');
    const taskText = taskInput.value;
    if (taskText) {
        const taskList = document.getElementById('taskList');
        const newTaskItem = document.createElement('li');
        newTaskItem.className = 'task-item';
        newTaskItem.textContent = taskText;
        taskList.appendChild(newTaskItem);
        taskInput.value = '';
    } else {
        alert('لطفاً عنوان تسک را وارد کنید.');
    }
}
