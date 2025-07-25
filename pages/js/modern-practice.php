<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/modern-code-examples" class="text-blue-600 dark:text-blue-400 hover:underline">Modern Code Examples</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🚀 Modern JavaScript Code Examples (ES6+)</h1>

  <p class="mb-4">
    With ES6 and beyond, JavaScript has become more expressive, cleaner, and more powerful.
    Below are modern examples to replace older patterns using concise ES6+ features.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Arrow Functions</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>// Old
function double(x) {
  return x * 2;
}

// Modern
const double = x => x * 2;
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Template Literals</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>// Old
var name = "Sara";
console.log("Hello " + name);

// Modern
const name = "Sara";
console.log(`Hello ${name}`);
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Destructuring</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>// Old
const user = { name: "Tom", age: 30 };
const name = user.name;

// Modern
const { name, age } = user;
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Spread Operator</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>const oldArray = [1, 2, 3];
const newArray = [...oldArray, 4, 5];
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Array Methods</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>const numbers = [1, 2, 3, 4];

// Map
const doubled = numbers.map(n => n * 2);

// Filter
const evens = numbers.filter(n => n % 2 === 0);
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Optional Chaining</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>const user = { profile: { email: "me@example.com" } };

// Old
if (user && user.profile && user.profile.email) {
  console.log(user.profile.email);
}

// Modern
console.log(user?.profile?.email);
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Nullish Coalescing</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>const username = null;
const nameToDisplay = username ?? "Guest";
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Promises and Async/Await</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>// Promise
fetch('https://api.example.com/data')
  .then(res => res.json())
  .then(data => console.log(data));

// Async/Await
async function getData() {
  const res = await fetch('https://api.example.com/data');
  const data = await res.json();
  console.log(data);
}
getData();
</code></pre>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    🧠 <strong>Practice Tip:</strong> Try converting your old functions and logic to these modern forms to improve readability and maintainability.
  </div>

 <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/es6-modules') ?>" class="hover:underline">← Previous: Modules in Depth</a>
    <a href="<?= base_url('js/oop-intro') ?>" class="hover:underline ms-auto">Next: Intro to OOP →</a>
</div>

</main>
