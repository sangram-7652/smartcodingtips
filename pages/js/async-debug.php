<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/debug-async" class="text-blue-600 hover:underline">Debug Async JS</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🐢 Debugging Asynchronous JavaScript</h1>

  <p class="mb-4">
    Asynchronous code (like <code>setTimeout</code>, <code>fetch</code>, or <code>async/await</code>) can be tricky to debug because it doesn't execute in a predictable top-down order.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📍 1. Understand the Call Stack and Event Loop</h2>
  <p class="mb-4">
    Async functions are scheduled via the event loop. Use the <strong>Call Stack</strong>, <strong>Event Queue</strong>, and <strong>Network</strong> tabs in DevTools to observe when callbacks run.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛑 2. Use <code>async</code>/<code>await</code> for Cleaner Debugging</h2>
  <p class="mb-2">Instead of chaining <code>.then()</code>, use <code>async</code>/<code>await</code> to keep your code linear and easier to step through.</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>async function fetchData() {
  try {
    const res = await fetch('https://api.example.com/data');
    const data = await res.json();
    console.log(data); // Easier to log and trace
  } catch (err) {
    console.error('Error:', err);
  }
}
fetchData();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🐞 3. Set Breakpoints Inside Async Functions</h2>
  <p class="mb-4">
    In browser DevTools, set breakpoints inside <code>async</code> functions or inside <code>.then()</code> blocks to pause execution at the right moment.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 4. Use <code>console.trace()</code> in Callbacks</h2>
  <p class="mb-4">This prints the stack trace to show where the callback originated from:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>setTimeout(() => {
  console.trace("Inside timeout");
}, 1000);</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🕵️ 5. Watch Promise States</h2>
  <p class="mb-4">
    In Chrome DevTools, go to the <strong>Sources</strong> tab → <strong>Async</strong> Call Stack section to track unresolved promises or pending async calls.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 6. Use Network Tab for Async HTTP Calls</h2>
  <p class="mb-4">
    If you're debugging <code>fetch()</code> or AJAX, use the <strong>Network</strong> tab to check status codes, payloads, and response bodies.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧰 Bonus Tips</h2>
  <ul class="list-disc list-inside mb-6">
    <li>Temporarily slow network (set to “Slow 3G”) in DevTools to test delays</li>
    <li>Use <code>await new Promise(resolve => setTimeout(resolve, 1000))</code> to simulate waiting</li>
    <li>Log before and after async calls to trace execution flow</li>
    <li>Use linters to catch unhandled promises or missing <code>await</code></li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Tip:</strong> Always handle errors in async code with <code>try...catch</code> to avoid silent failures.
  </div>

  <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/security-intro" class="text-blue-600 hover:underline">Security Basics →</a></p>
</div>
</main>
