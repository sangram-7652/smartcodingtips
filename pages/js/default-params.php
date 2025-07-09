<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/default-params" class="text-blue-600 hover:underline">Default Parameters</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🧩 Default Parameters in JavaScript</h1>

    <p class="mb-4">
        Default parameters allow you to set default values for function parameters. If no value is passed, the default will be used.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Syntax Example</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>function greet(name = "Guest") {
  console.log(`Hello, ${name}!`);
}

greet();         // Hello, Guest!
greet("Alice");  // Hello, Alice!
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Behind the Scenes</h2>
    <p class="mb-4">
        Before ES6, developers used the OR operator (`||`) to simulate default values:
    </p>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>function greet(name) {
  name = name || "Guest";
  console.log("Hello, " + name);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Use Cases</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Optional function arguments</li>
        <li>Better readability and fewer conditional checks</li>
        <li>Useful in utility/helper functions</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Watch Out!</h2>
    <p class="mb-4">
        Default parameters only apply if the argument is <code>undefined</code>, not <code>null</code>.
    </p>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>function demo(value = "default") {
  console.log(value);
}

demo(undefined); // "default"
demo(null);      // null</code></pre>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
        ✅ <strong>Next Up:</strong> Learn about <code>import</code> and <code>export</code> for using JavaScript modules!
    </div>

</main>
