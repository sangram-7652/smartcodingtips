<!-- JavaScript Alert, Prompt, Console -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/alert-prompt-console" class="text-blue-600 dark:text-blue-400 hover:underline">Alert, Prompt & Console</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Alert, Prompt, and Console in JavaScript</h1>

    <p class="mb-4">
        JavaScript provides built-in functions to interact with users and developers. These include <strong>alert</strong> for pop-up messages, <strong>prompt</strong> for user input, and <strong>console</strong> for logging and debugging.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔔 1. <code>alert()</code></h2>
    <p class="mb-4">
        Displays a popup message to the user. It's commonly used for notifications or warnings.
    </p>
    
    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>alert("Welcome to JavaScript!");</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-6">
        ⚠️ The alert box blocks further interaction until dismissed.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧾 2. <code>prompt()</code></h2>
    <p class="mb-4">
        Asks the user to input a value and returns that value as a string.
    </p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>let name = prompt("What is your name?");
alert("Hello, " + name);</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mb-6">
        📝 If the user clicks "Cancel", <code>prompt()</code> returns <code>null</code>.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📋 3. <code>console.log()</code></h2>
    <p class="mb-4">
        Outputs data to the browser's developer console. Useful for debugging and inspecting values.
    </p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>console.log("Page loaded");
let x = 5;
console.log("Value of x is:", x);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠 4. Other Console Methods</h2>
    <ul class="list-disc list-inside mb-4">
        <li><code>console.warn("Warning message")</code> – Shows a yellow warning</li>
        <li><code>console.error("Error message")</code> – Shows a red error message</li>
        <li><code>console.table(object)</code> – Displays data as a table</li>
    </ul>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>let user = { name: "Alice", age: 30 };
console.table(user);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Summary</h2>
    <ul class="list-disc list-inside mb-6">
        <li><code>alert()</code> – Shows popup message</li>
        <li><code>prompt()</code> – Gets user input</li>
        <li><code>console.log()</code> – Prints to the developer console</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        ✅ <strong>Tip:</strong> Use <code>console.log()</code> often to test code logic and track variable values.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/comments') ?>" class="hover:underline">← Previous: Comments</a>
    <a href="<?= base_url('js/if-else') ?>" class="hover:underline ms-auto">Next: If, Else, Switch →</a>
</div>
</main>
