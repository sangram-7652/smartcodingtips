<!-- JavaScript Basics – Error Handling -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/error-handling" class="text-blue-600 hover:underline">Error Handling</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Error Handling in JavaScript</h1>

    <p class="mb-4">
        JavaScript provides built-in mechanisms to handle errors, making your code more robust and fault-tolerant. The most common approach is using the <code>try...catch</code> statement.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ try...catch Syntax</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>try {
    // Code that might throw an error
    let result = riskyFunction();
    console.log(result);
} catch (error) {
    // Code to run if an error occurs
    console.error("❌ Error:", error.message);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Common Error Example</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>try {
    nonExistentFunction(); // This will throw a ReferenceError
} catch (err) {
    console.error("Caught error:", err);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Optional finally Block</h2>
    <p class="mb-2">Use <code>finally</code> to run code after <code>try/catch</code> regardless of the outcome.</p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>try {
    console.log("Trying something risky...");
} catch (err) {
    console.error("Caught an error");
} finally {
    console.log("Always runs this block.");
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚨 Throwing Custom Errors</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function divide(a, b) {
    if (b === 0) {
        throw new Error("Division by zero is not allowed.");
    }
    return a / b;
}

try {
    console.log(divide(10, 0));
} catch (e) {
    console.error("Custom Error:", e.message);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Async Error Handling</h2>
    <p class="mb-2">Use <code>try...catch</code> inside <code>async</code> functions for asynchronous error handling.</p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>async function fetchData() {
    try {
        const res = await fetch("https://api.example.com/data");
        const data = await res.json();
        console.log(data);
    } catch (err) {
        console.error("Fetch error:", err);
    }
}</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Always handle both synchronous and asynchronous errors to prevent app crashes.
    </div>

</main>
