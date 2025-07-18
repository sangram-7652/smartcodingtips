<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="javascript.php?page=js/json" class="text-blue-600 hover:underline">Working with JSON</a>
            </li>
        </ol>
    </nav>

    <h1 class="text-3xl font-bold mb-4">🗂️ Working with JSON in JavaScript</h1>

    <p class="mb-4">
        JSON (<strong>JavaScript Object Notation</strong>) is a lightweight data format used to exchange data between a client and a server. It is easy to read, write, and parse using JavaScript.
    </p>

    <h2 class="text-2xl font-semibold mt-6 mb-2">📄 JSON Format Example</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>{
  "name": "Alice",
  "age": 25,
  "skills": ["HTML", "CSS", "JavaScript"]
}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Converting Between JSON and JS</h2>

    <h3 class="text-xl font-semibold mt-4 mb-2">✅ JSON to JavaScript Object</h3>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>const jsonString = '{"name":"Alice","age":25}';
const obj = JSON.parse(jsonString);

console.log(obj.name); // Alice</code></pre>

    <h3 class="text-xl font-semibold mt-4 mb-2">✅ JavaScript Object to JSON</h3>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>const person = { name: "Bob", age: 30 };
const json = JSON.stringify(person);

console.log(json); // {"name":"Bob","age":30}</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 JSON with fetch()</h2>
    <pre class="bg-gray-100 p-4 rounded mb-4 text-sm dark:bg-gray-900 dark:text-white"><code>fetch("https://jsonplaceholder.typicode.com/posts/1")
  .then(response => response.json())
  .then(data => {
    console.log(data.title);
  });</code></pre>

    <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 JSON Tips & Warnings</h2>
    <ul class="list-disc list-inside mb-6">
        <li>Keys and string values must be in double quotes <code>" "</code></li>
        <li>No comments allowed in JSON</li>
        <li>Use <code>try...catch</code> when parsing JSON</li>
    </ul>

    <pre class="bg-gray-100 p-4 rounded text-sm dark:bg-gray-900 dark:text-white"><code>try {
  const obj = JSON.parse('{"name":"Eve"}');
  console.log(obj.name);
} catch (error) {
  console.error("Invalid JSON:", error);
}</code></pre>

    <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
        💡 <strong>Next Step:</strong> Learn how to use <code>async/await</code> with fetch for cleaner API calls!
    </div>


    <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/async-await-api" class="text-blue-600 hover:underline">Async/Await with APIs →</a></p>
</div>  
</main>
