localStorage.clear(); // احذف كل الداتا من Local Storage أول ما الصفحة تفتح
document.addEventListener("DOMContentLoaded", () => {
    const userId = getCookie("userid");
    if (!userId) {
        alert("No user ID found. Redirecting to login.");
        window.location.href = "login.html";
        return;
    }

    const columns = document.querySelectorAll(".column");
    columns.forEach(col => {
        col.addEventListener("dragover", e => e.preventDefault());
        col.addEventListener("drop", e => {
            e.preventDefault();
            const taskId = e.dataTransfer.getData("text");
            const task = document.getElementById(taskId);
            col.appendChild(task);
        });
    });
});

// إنشاء المهام يدويًا بدون حفظ
function addTask() {
    const taskInput = document.getElementById("taskInput");
    const taskText = taskInput.value.trim();

    if (taskText !== "") {
        const task = document.createElement("div");
        task.innerText = taskText;
        task.className = "task";
        task.draggable = true;
        task.id = "task-" + Date.now();

        // إعداد السحب
        task.addEventListener("dragstart", e => {
            e.dataTransfer.setData("text", task.id);
        });

        document.getElementById("todo").appendChild(task);
        taskInput.value = "";
    }
}

// دالة getCookie عشان تشتغل هنا كمان
function getCookie(name) {
    const match = document.cookie.match(new RegExp('(^| )' + name + '=([^;]+)'));
    return match ? decodeURIComponent(match[2]) : null;
}
