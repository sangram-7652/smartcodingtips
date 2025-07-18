<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/es6-overview" class="text-blue-600 hover:underline">ES6+ Overview</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">⚙️ ES6+ Modern JavaScript Features</h1>

    <p class="mb-4">
        ES6 (ECMAScript 2015) and later versions introduced powerful new syntax and features that make JavaScript more expressive and concise.
        Here’s a quick overview of the most important updates you’ll use frequently in modern development.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 let & const</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>let count = 10;  // Mutable
const PI = 3.14; // Immutable</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔻 Arrow Functions</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Traditional
function greet(name) {
  return "Hello " + name;
}

// Arrow
const greet = name => `Hello ${name}`;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Template Literals</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>const user = "Alice";
console.log(`Welcome, ${user}!`);</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Destructuring</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Object
const user = { name: "Bob", age: 25 };
const { name, age } = user;

// Array
const colors = ["red", "green"];
const [first, second] = colors;</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🌀 Spread & Rest Operators</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Spread
const nums = [1, 2, 3];
const newNums = [...nums, 4, 5];

// Rest
function sum(...args) {
  return args.reduce((a, b) => a + b, 0);
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📁 Modules</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>// Exporting
export const sayHello = () => console.log("Hello");

// Importing
import { sayHello } from './utils.js';</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Default Parameters</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>function greet(name = "Guest") {
  console.log(`Hello, ${name}`);
}</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
        💡 <strong>Next:</strong> Dive into classes, inheritance, and OOP with ES6+!
    </div>

    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/default-params" class="text-blue-600 hover:underline">Default Params →</a></p>
</div>

</main>
