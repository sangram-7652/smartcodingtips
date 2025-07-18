<!-- JavaScript Basics – Async / Await -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/async-await" class="text-blue-600 hover:underline">Async / Await</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Async / Await in JavaScript</h1>

    <p class="mb-4">
        <code>async</code> and <code>await</code> are modern keywords in JavaScript that simplify working with Promises. They allow you to write asynchronous code in a clean, readable, and synchronous-like manner.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Declaring an Async Function</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>async function greet() {
    return "Hello, Async!";
}

greet().then(msg => console.log(msg));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⏳ Awaiting a Promise</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function fetchData() {
    return new Promise(resolve => {
        setTimeout(() => resolve("📦 Data fetched"), 2000);
    });
}

async function displayData() {
    const data = await fetchData();
    console.log(data);
}

displayData();</code></pre>

    <p class="mb-4">
        <code>await</code> pauses the execution of the async function until the promise resolves.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">❗ Error Handling with try...catch</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>async function loadUser() {
    try {
        const user = await fetchUser(); // imaginary function
        console.log(user);
    } catch (error) {
        console.error("❌ Error:", error);
    }
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Multiple Awaits in Sequence</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>async function run() {
    const res1 = await fetchStep1();
    const res2 = await fetchStep2(res1);
    const res3 = await fetchStep3(res2);
    console.log(res3);
}</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Always use <code>try...catch</code> inside async functions to handle potential rejections safely.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code>async</code> turns a function into a Promise-returning function.</li>
        <li><code>await</code> pauses the function until the Promise resolves.</li>
        <li>Makes code cleaner and avoids chaining <code>.then()</code>.</li>
    </ul>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/error-handling" class="text-blue-600 hover:underline">Error Handling →</a></p>
</div>

</main>
