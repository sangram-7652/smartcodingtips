<!-- JavaScript Defining Functions -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/functions" class="text-blue-600 dark:text-blue-400 hover:underline">Defining Functions</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Defining Functions in JavaScript</h1>

    <p class="mb-4">
        Functions are reusable blocks of code that perform a specific task. In JavaScript, functions can be defined in multiple ways.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧱 1. Function Declaration</h2>
    <p class="mb-4">This is the most common way to define a function.</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>function greet(name) {
    console.log("Hello, " + name + "!");
}

greet("Alice"); // Output: Hello, Alice!</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 2. Function Expression</h2>
    <p class="mb-4">Functions can also be assigned to variables.</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const greet = function(name) {
    return "Hi, " + name + "!";
};

console.log(greet("Bob"));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚡ 3. Arrow Functions (ES6+)</h2>
    <p class="mb-4">Shorter syntax for writing functions, especially useful in callbacks.</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>const add = (a, b) =&gt; a + b;

console.log(add(5, 3)); // Output: 8</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📘 Parameters & Return</h2>
    <p class="mb-4">Functions can take parameters and return a value using the <code>return</code> keyword.</p>

    <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>function square(x) {
    return x * x;
}

let result = square(4);
console.log(result); // 16</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded">
        📝 <strong>Note:</strong> Function declarations are hoisted. This means they can be called before they are defined in the code.
    </div>

    <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/control-examples') ?>" class="hover:underline">← Previous: Control Flow Examples</a>
    <a href="<?= base_url('js/arrow-functions') ?>" class="hover:underline ms-auto">Next: Arrow Functions →</a>
</div>

</main>
