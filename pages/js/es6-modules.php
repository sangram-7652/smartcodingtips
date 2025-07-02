<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/modules-in-depth" class="text-blue-600 hover:underline">Modules in Depth</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">📦 JavaScript Modules – In Depth</h1>

  <p class="mb-4">
    JavaScript modules allow you to break your code into separate files for better maintainability and reusability.
    Modern JS (ES6+) supports <code>import</code> and <code>export</code> syntax for working with modules.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Named Exports</h2>
  <p>Export multiple things from one file using <code>export</code>:</p>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm overflow-x-auto"><code>// utils.js
export const add = (a, b) => a + b;
export const multiply = (a, b) => a * b;

// main.js
import { add, multiply } from './utils.js';
console.log(add(2, 3));</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Default Exports</h2>
  <p>Use <code>export default</code> when only one main export is needed:</p>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm overflow-x-auto"><code>// greet.js
export default function greet(name) {
  return `Hello, ${name}`;
}

// main.js
import greet from './greet.js';
console.log(greet("Alice"));</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Combining Named and Default Exports</h2>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm overflow-x-auto"><code>// mix.js
export const name = "JS Learner";
export default function sayHi() {
  console.log("Hi!");
}

// main.js
import sayHi, { name } from './mix.js';</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🌐 Using Modules in the Browser</h2>
  <p>Add <code>type="module"</code> to your script tag:</p>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm overflow-x-auto"><code>&lt;script type="module" src="main.js"&gt;&lt;/script&gt;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Module File Rules</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use the <code>.js</code> extension when importing</li>
    <li>Modules run in strict mode automatically</li>
    <li>Each module has its own scope</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 Common Errors</h2>
  <ul class="list-disc list-inside mb-6 text-red-700">
    <li><code>Uncaught SyntaxError: Cannot use import statement outside a module</code> – Fix: use <code>type="module"</code></li>
    <li>Missing file extension in import path</li>
    <li>Wrong file location or relative path</li>
  </ul>

  <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
    ✅ <strong>Next Tip:</strong> Organize related functions and components into modules for cleaner, reusable code!
  </div>

</main>
