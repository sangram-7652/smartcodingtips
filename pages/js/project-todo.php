<!-- JavaScript Project – To-Do List -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/todo-list" class="text-blue-600 hover:underline">To-Do List</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-6">📝 Build a Simple To-Do List App</h1>

    <p class="mb-4">
        This project demonstrates how to manipulate the DOM, handle events, and store data using JavaScript.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 HTML Structure</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;div id="todo-container"&gt;
    &lt;input type="text" id="todo-input" placeholder="Add a task..." /&gt;
    &lt;button id="add-btn"&gt;Add&lt;/button&gt;
    &lt;ul id="todo-list"&gt;&lt;/ul&gt;
&lt;/div&gt;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 JavaScript Logic</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const input = document.getElementById("todo-input");
const addBtn = document.getElementById("add-btn");
const list = document.getElementById("todo-list");

addBtn.addEventListener("click", () => {
    const task = input.value.trim();
    if (task === "") return;

    const li = document.createElement("li");
    li.textContent = task;

    const delBtn = document.createElement("button");
    delBtn.textContent = "❌";
    delBtn.onclick = () => li.remove();

    li.appendChild(delBtn);
    list.appendChild(li);
    input.value = "";
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎨 Basic Styles (Optional)</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>&lt;style&gt;
#todo-container {
    max-width: 400px;
    margin: auto;
}
input {
    width: 70%;
    padding: 8px;
}
button {
    margin-left: 5px;
    padding: 8px 12px;
}
li {
    margin: 10px 0;
    display: flex;
    justify-content: space-between;
}
&lt;/style&gt;</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> You can extend this app by adding <code>localStorage</code> support or edit functionality!
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Skills You'll Practice</h2>
    <ul class="list-disc list-inside mb-6">
        <li>DOM Selection and Manipulation</li>
        <li>Event Handling</li>
        <li>Creating and Appending Elements</li>
        <li>Simple UX interactions</li>
    </ul>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/project-weather" class="text-blue-600 hover:underline">Weather App →</a></p>
</div>

</main>
