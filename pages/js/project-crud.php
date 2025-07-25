<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/project-crud" class="text-blue-600 dark:text-blue-400 hover:underline">Simple CRUD</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🛠️ JavaScript CRUD App (Create, Read, Update, Delete)</h1>

  <p class="mb-4">
    This project demonstrates a basic CRUD interface using only JavaScript and HTML. All data is stored locally using <code>localStorage</code>.
  </p>

  <h2 class="text-xl font-semibold mt-6 mb-2">📄 HTML Structure</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>&lt;input type="text" id="name-input" placeholder="Enter name" class="border p-2 rounded w-full mb-2"&gt;
&lt;button id="add-btn" class="bg-green-500 text-white px-4 py-2 rounded"&gt;Add&lt;/button&gt;

&lt;ul id="user-list" class="mt-4 space-y-2"&gt;&lt;/ul&gt;</code></pre>

  <h2 class="text-xl font-semibold mt-6 mb-2">⚙️ JavaScript Logic</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white mb-4"><code>const input = document.getElementById("name-input");
const addBtn = document.getElementById("add-btn");
const userList = document.getElementById("user-list");

let users = JSON.parse(localStorage.getItem("users")) || [];
let editIndex = -1;

function saveUsers() {
  localStorage.setItem("users", JSON.stringify(users));
}

function renderUsers() {
  userList.innerHTML = "";
  users.forEach((user, index) =&gt; {
    const li = document.createElement("li");
    li.className = "flex justify-between items-center bg-gray-100 p-2 rounded";

    const span = document.createElement("span");
    span.textContent = user;

    const buttons = document.createElement("div");

    const editBtn = document.createElement("button");
    editBtn.textContent = "Edit";
    editBtn.className = "text-blue-600 mr-2";
    editBtn.onclick = () =&gt; {
      input.value = user;
      editIndex = index;
      addBtn.textContent = "Update";
      addBtn.classList.replace("bg-green-500", "bg-yellow-500");
    };

    const delBtn = document.createElement("button");
    delBtn.textContent = "Delete";
    delBtn.className = "text-red-600";
    delBtn.onclick = () =&gt; {
      users.splice(index, 1);
      saveUsers();
      renderUsers();
    };

    buttons.appendChild(editBtn);
    buttons.appendChild(delBtn);

    li.appendChild(span);
    li.appendChild(buttons);
    userList.appendChild(li);
  });
}

addBtn.onclick = () =&gt; {
  const name = input.value.trim();
  if (name) {
    if (editIndex &gt; -1) {
      users[editIndex] = name;
      editIndex = -1;
      addBtn.textContent = "Add";
      addBtn.classList.replace("bg-yellow-500", "bg-green-500");
    } else {
      users.push(name);
    }
    input.value = "";
    saveUsers();
    renderUsers();
  }
};

renderUsers();</code></pre>

  <h2 class="text-xl font-semibold mt-6 mb-2">🚀 Features to Add Later</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Search functionality</li>
    <li>Sorting by name</li>
    <li>Pagination for large lists</li>
    <li>Separate fields like name, email, etc.</li>
    <li>Export/import JSON data</li>
  </ul>

  <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded">
    💡 <strong>Tip:</strong> Always validate input and prevent empty values from being stored.
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/project-notes') ?>" class="hover:underline">← Previous: Notes App</a>
    <a href="<?= base_url('js/vanilla-vs-frameworks') ?>" class="hover:underline ms-auto">Next: Vanilla vs Frameworks →</a>
</div>

</main>
