<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/fetch-basics" class="text-blue-600 dark:text-blue-400 hover:underline">fetch() Basics</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">📡 JavaScript <code>fetch()</code> Basics</h1>

    <p class="mb-4">
        The <code>fetch()</code> method allows you to make HTTP requests in JavaScript. It’s a modern alternative to <code>XMLHttpRequest</code> and is Promise-based, making it easier to handle asynchronous operations.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚀 Syntax</h2>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log(data);
    })
    .catch(error => {
        console.error("Error:", error);
    });</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔎 Example – Fetching Users from JSONPlaceholder</h2>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>fetch("https://jsonplaceholder.typicode.com/users")
    .then(res => res.json())
    .then(users => {
        users.forEach(user => {
            console.log(user.name);
        });
    });</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📥 GET vs POST with fetch</h2>

    <h3 class="text-xl font-semibold mt-4 mb-2">GET (default)</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>fetch("https://api.example.com/data")</code></pre>

    <h3 class="text-xl font-semibold mt-4 mb-2">POST with JSON</h3>
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded mb-4 text-sm dark:bg-gray-800 dark:text-white"><code>fetch("https://api.example.com/submit", {
    method: "POST",
    headers: {
        "Content-Type": "application/json"
    },
    body: JSON.stringify({
        name: "John Doe",
        age: 30
    })
})
.then(res => res.json())
.then(data => console.log(data));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Handling Errors</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>.catch()</strong> handles network errors</li>
        <li><strong>Check response.ok</strong> for HTTP errors</li>
    </ul>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm dark:bg-gray-800 dark:text-white"><code>fetch("https://api.example.com/data")
    .then(response => {
        if (!response.ok) {
            throw new Error("HTTP error " + response.status);
        }
        return response.json();
    })
    .then(data => console.log(data))
    .catch(error => console.error("Error:", error));</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
        ✅ <strong>Tip:</strong> Use <code>async/await</code> to simplify fetch logic in modern JavaScript. Want that example next?
    </div>


    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/api-intro') ?>" class="hover:underline">← Previous: Intro to APIs</a>
    <a href="<?= base_url('js/json') ?>" class="hover:underline ms-auto">Next: Working with JSON →</a>
</div>
</main>
