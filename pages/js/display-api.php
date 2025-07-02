<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/display-fetched-data" class="text-blue-600 hover:underline">Display Fetched Data</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🖼️ Display Fetched Data Using JavaScript</h1>

    <p class="mb-4">
        Once you fetch data using <code>fetch()</code> or <code>async/await</code>, the next step is to display it on your webpage dynamically using DOM methods.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Example: Displaying a List of Users</h2>

    <div class="bg-gray-100 p-4 rounded mb-6 text-sm">
        <strong>HTML Structure:</strong>
        <pre class="overflow-x-auto"><code>&lt;ul id="userList"&gt;&lt;/ul&gt;</code></pre>
    </div>

    <div class="bg-gray-100 p-4 rounded mb-6 text-sm">
        <strong>JavaScript Code:</strong>
        <pre class="overflow-x-auto"><code>async function loadUsers() {
  const response = await fetch("https://jsonplaceholder.typicode.com/users");
  const users = await response.json();

  const list = document.getElementById("userList");
  list.innerHTML = "";

  users.forEach(user => {
    const li = document.createElement("li");
    li.textContent = user.name + " (" + user.email + ")";
    list.appendChild(li);
  });
}

loadUsers();</code></pre>
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Output Example</h2>
    <ul id="userList" class="list-disc list-inside bg-white shadow p-4 rounded mb-4">
        <li>Leanne Graham (Sincere@april.biz)</li>
        <li>Ervin Howell (Shanna@melissa.tv)</li>
        <li>Clementine Bauch (Nathan@yesenia.net)</li>
        <!-- Add more dynamically from JS -->
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Pro Tips</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Always clear the container using <code>innerHTML = ""</code> before inserting new data.</li>
        <li>You can insert data into tables, cards, dropdowns, etc.</li>
        <li>Consider error handling for failed fetches or empty responses.</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
        💡 <strong>Bonus:</strong> Try building a "Search Users" input box to filter the displayed data!
    </div>

</main>
