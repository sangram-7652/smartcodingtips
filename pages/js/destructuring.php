<!-- JavaScript Basics - Destructuring -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/destructuring" class="text-blue-600 hover:underline">Destructuring</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Destructuring in JavaScript</h1>

    <p class="mb-4">
        Destructuring is a concise way to unpack values from arrays or properties from objects into distinct variables.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Array Destructuring</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const numbers = [1, 2, 3];
const [a, b, c] = numbers;

console.log(a); // 1
console.log(b); // 2</code></pre>

    <p class="mb-4">
        You can skip values by leaving gaps:
    </p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const [first, , third] = [10, 20, 30];
console.log(third); // 30</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📁 Object Destructuring</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const user = { name: "Alice", age: 25 };
const { name, age } = user;

console.log(name); // Alice
console.log(age); // 25</code></pre>

    <p class="mb-4">
        Rename variables using a colon:
    </p>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const { name: userName } = user;
console.log(userName); // Alice</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Default Values</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const { city = "Unknown" } = user;
console.log(city); // Unknown</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔄 Swapping Values with Destructuring</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let x = 1, y = 2;
[x, y] = [y, x];
console.log(x); // 2
console.log(y); // 1</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Destructuring in Function Parameters</h2>
    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function greet({ name, age }) {
    console.log(`Hello ${name}, age ${age}`);
}

greet({ name: "Bob", age: 30 });</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded mt-6">
        💡 <strong>Tip:</strong> Destructuring makes your code cleaner, especially in functions and loops.
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/spread-rest" class="text-blue-600 hover:underline">Spread & Rest →</a></p>
</div>
</main>
