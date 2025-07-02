<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/sync-vs-async" class="text-blue-600 hover:underline">Sync vs Async</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🔄 Synchronous vs Asynchronous JavaScript</h1>

  <p class="mb-4">
    JavaScript is single-threaded — it runs code line-by-line in a single sequence. But thanks to asynchronous features, it can perform non-blocking operations (like fetching data or timers).
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⏱️ What is Synchronous Code?</h2>
  <p class="mb-2">Synchronous code runs line-by-line. One operation must finish before the next begins.</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 overflow-x-auto"><code>console.log("1");
console.log("2");
console.log("3");
// Output: 1, 2, 3
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚦 What is Asynchronous Code?</h2>
  <p class="mb-2">Asynchronous code allows tasks to run in the background while the rest of the code continues.</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 overflow-x-auto"><code>console.log("1");

setTimeout(() => {
  console.log("2");
}, 2000);

console.log("3");
// Output: 1, 3, (then after 2 sec) 2
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Why Use Asynchronous Code?</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Fetching data from a server</li>
    <li>Waiting for user input</li>
    <li>Running animations or delays</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Common Asynchronous Tools</h2>
  <ul class="list-disc list-inside mb-4">
    <li><code>setTimeout</code> and <code>setInterval</code></li>
    <li><code>fetch()</code> for API calls</li>
    <li>Promises and <code>async/await</code></li>
    <li>Event listeners</li>
  </ul>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Asynchronous programming helps you write non-blocking code, improving performance and user experience.
  </div>

</main>
