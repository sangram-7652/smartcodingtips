<!-- JavaScript Data Types -->

<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/data-types" class="text-blue-600 hover:underline">JavaScript Data Types</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">JavaScript Data Types</h1>

    <p class="mb-4">
        JavaScript is a dynamically typed language, meaning variables can hold any type of data, and types are determined at runtime. Data types fall into two categories: <strong>primitive types</strong> and <strong>reference types</strong>.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔢 1. Primitive Data Types</h2>

    <ul class="list-disc list-inside mb-4">
        <li><strong>String</strong> – Represents text: <code>"Hello"</code>, <code>'World'</code></li>
        <li><strong>Number</strong> – Both integers and floating-point: <code>42</code>, <code>3.14</code></li>
        <li><strong>Boolean</strong> – True or false: <code>true</code>, <code>false</code></li>
        <li><strong>Undefined</strong> – A declared variable with no value</li>
        <li><strong>Null</strong> – An intentional absence of any object value</li>
        <li><strong>BigInt</strong> – For very large integers: <code>12345678901234567890n</code></li>
        <li><strong>Symbol</strong> – Unique and immutable value often used as object keys</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let name = "Alice";     // String
let age = 30;           // Number
let isAdmin = true;     // Boolean
let x;                  // Undefined
let empty = null;       // Null
let big = 12345678901234567890n; // BigInt
let id = Symbol("id");  // Symbol
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧩 2. Reference (Non-Primitive) Types</h2>

    <ul class="list-disc list-inside mb-4">
        <li><strong>Object</strong> – Collection of key-value pairs</li>
        <li><strong>Array</strong> – Ordered list of values</li>
        <li><strong>Function</strong> – A block of code that can be called</li>
        <li><strong>Date, RegExp, Error</strong> – Built-in object types</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let person = { name: "Alice", age: 30 }; // Object
let colors = ["red", "green", "blue"];   // Array
function greet() {
    console.log("Hello!");
}                                       // Function
</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📊 3. Type Checking with <code>typeof</code></h2>

    <p class="mb-4">You can check the type of a variable using the <code>typeof</code> operator:</p>

    <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>typeof "hello"    // "string"
typeof 42         // "number"
typeof true       // "boolean"
typeof undefined  // "undefined"
typeof null       // "object" (quirk in JS!)
typeof {}         // "object"
typeof []         // "object"
typeof function() {}  // "function"
</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-800 p-4 rounded mb-6">
        ⚠️ <strong>Note:</strong> <code>typeof null</code> returns <code>"object"</code> due to a historic bug in JavaScript.
    </div>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Summary</h2>
    <p class="mb-4">JavaScript has 8 basic data types:</p>

    <ul class="grid grid-cols-2 sm:grid-cols-3 gap-2 list-disc list-inside mb-6">
        <li>String</li>
        <li>Number</li>
        <li>Boolean</li>
        <li>Undefined</li>
        <li>Null</li>
        <li>BigInt</li>
        <li>Symbol</li>
        <li>Object</li>
    </ul>

    <div class="bg-green-100 border-l-4 border-green-500 text-green-800 p-4 rounded">
        <strong>Best Practice:</strong> Learn to distinguish between primitive and reference types. Understanding how they are stored and compared will help you avoid bugs.
    </div>
    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/operators" class="text-blue-600 hover:underline">Operators →</a></p>
</div>

</main>
