<!-- JavaScript Arrow Functions -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/arrow-functions" class="text-blue-600 hover:underline">Arrow Functions</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">Arrow Functions in JavaScript</h1>

    <p class="mb-4">
        Arrow functions, introduced in ES6 (ECMAScript 2015), provide a shorter syntax for writing functions. They are especially useful in functional programming and callbacks.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📝 Basic Syntax</h2>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>// Traditional function
function add(a, b) {
    return a + b;
}

// Arrow function
const add = (a, b) =&gt; a + b;

console.log(add(2, 3)); // Output: 5</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🎯 Features</h2>
    <ul class="list-disc list-inside mb-4">
        <li>Simpler syntax, especially for small functions</li>
        <li>Does <strong>not bind</strong> its own <code>this</code> value</li>
        <li>Best used for callbacks or inline functions</li>
    </ul>

    <h2 class="text-2xl font-semibold mt-6 mb-2">💡 One-Liner Arrow Functions</h2>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const square = x =&gt; x * x;
console.log(square(5)); // Output: 25</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Multiple Lines & Return</h2>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const greet = name =&gt; {
    const message = "Hello, " + name;
    return message;
};

console.log(greet("Alice"));</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ Arrow Functions and <code>this</code></h2>

    <p class="mb-4">
        Unlike regular functions, arrow functions do <strong>not</strong> have their own <code>this</code>. They inherit it from the surrounding lexical scope.
    </p>

    <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm mb-4"><code>const person = {
    name: "Bob",
    greet: function() {
        setTimeout(() =&gt; {
            console.log("Hi, I'm " + this.name);
        }, 1000);
    }
};

person.greet(); // Output: "Hi, I'm Bob"</code></pre>

    <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-800 p-4 rounded">
        💡 Use arrow functions to preserve <code>this</code> in methods or inside timeouts and event handlers.
    </div>

</main>
