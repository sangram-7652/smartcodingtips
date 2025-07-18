<!-- JavaScript Basics – Callbacks -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/callbacks" class="text-blue-600 hover:underline">Callbacks</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Understanding Callbacks in JavaScript</h1>

    <p class="mb-4">
        A <strong>callback</strong> is a function passed into another function as an argument, then invoked later inside that function to complete a routine or action.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📞 Why Use Callbacks?</h2>
    <p class="mb-4">
        JavaScript is asynchronous and non-blocking. Callbacks help manage operations that take time, such as network requests or reading files.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Basic Example</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function greet(name, callback) {
    console.log("Hello " + name);
    callback();
}

function sayBye() {
    console.log("Goodbye!");
}

greet("Alice", sayBye);</code></pre>

    <p class="mb-4">
        Output:
        <br><code>Hello Alice</code><br>
        <code>Goodbye!</code>
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⏱ With setTimeout</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>setTimeout(function() {
    console.log("Executed after 2 seconds");
}, 2000);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔄 Callback as Function Parameter</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function processUserInput(callback) {
    const name = "Bob";
    callback(name);
}

processUserInput(function(name) {
    console.log("User's name is " + name);
});</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Callback Hell</h2>
    <p class="mb-2">
        Too many nested callbacks can lead to unreadable code.
    </p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>doSomething(function(result1) {
    doSomethingElse(result1, function(result2) {
        doMore(result2, function(result3) {
            // ...
        });
    });
});</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mt-6">
        ⚠️ <strong>Tip:</strong> Use <code>Promises</code> or <code>async/await</code> to avoid callback hell.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Summary</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Callbacks are used to run code after a task completes.</li>
        <li>They allow asynchronous, non-blocking operations.</li>
        <li>Can be anonymous functions or named functions.</li>
    </ul>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/promises" class="text-blue-600 hover:underline">Promises →</a></p>
</div>
</main>
