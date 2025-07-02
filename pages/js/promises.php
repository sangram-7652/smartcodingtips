<!-- JavaScript Basics – Promises -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/promises" class="text-blue-600 hover:underline">Promises</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Promises</h1>

    <p class="mb-4">
        A <strong>Promise</strong> is a JavaScript object that represents the eventual completion (or failure) of an asynchronous operation and its resulting value.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⏳ Why Promises?</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Improve readability of async code</li>
        <li>Avoid "callback hell"</li>
        <li>Easy error handling with <code>.catch()</code></li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 Basic Syntax</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const promise = new Promise((resolve, reject) => {
    const success = true;

    if (success) {
        resolve("✅ Operation successful");
    } else {
        reject("❌ Something went wrong");
    }
});

promise
    .then(result => console.log(result))
    .catch(error => console.error(error));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Example: Simulate API</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>function fetchData() {
    return new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve("📦 Data received");
        }, 2000);
    });
}

fetchData()
    .then(data => console.log(data))
    .catch(err => console.error(err));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Chaining Promises</h2>
    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>fetchData()
    .then(data => {
        console.log(data);
        return "🔍 Processing data";
    })
    .then(processed => console.log(processed))
    .catch(err => console.error(err));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Promise States</h2>
    <ul class="list-disc list-inside mb-4">
        <li><strong>Pending</strong>: Initial state</li>
        <li><strong>Fulfilled</strong>: Operation completed</li>
        <li><strong>Rejected</strong>: Operation failed</li>
    </ul>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Promises are a foundation for modern JavaScript async tools like <code>fetch()</code> and <code>async/await</code>.
    </div>

</main>
