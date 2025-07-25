<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/debugging-techniques" class="text-blue-600 dark:text-blue-400 hover:underline">Debugging Techniques</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🐞 JavaScript Debugging Techniques</h1>

  <p class="mb-4">
    Debugging is an essential skill for every developer. It involves identifying and fixing bugs or unexpected behavior in your code. Here are some effective techniques and tools to help you debug JavaScript.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 1. Console Logging</h2>
  <p class="mb-2">
    The simplest way to debug is by using <code>console.log()</code> to print values at various points in your code.
  </p>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>console.log("Value of x:", x);</code></pre>

  <p class="mb-4">
    Other console methods:
  </p>
  <ul class="list-disc list-inside mb-4">
    <li><code>console.error()</code></li>
    <li><code>console.warn()</code></li>
    <li><code>console.table()</code></li>
    <li><code>console.dir()</code> (for inspecting objects)</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛑 2. Using the <code>debugger</code> Statement</h2>
  <p class="mb-4">
    The <code>debugger</code> keyword stops code execution and lets you inspect variables in the browser's DevTools.
  </p>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>function calculate(a, b) {
  debugger;
  return a + b;
}</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧰 3. DevTools (Chrome, Firefox, etc.)</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Open DevTools with <kbd>F12</kbd> or <kbd>Ctrl + Shift + I</kbd></li>
    <li>Use the <strong>Sources</strong> tab to set breakpoints</li>
    <li>Watch variables, step through code, and inspect call stacks</li>
    <li>Check network requests in the <strong>Network</strong> tab</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📦 4. Code Linters</h2>
  <p class="mb-4">
    Use tools like <strong>ESLint</strong> to catch syntax issues and potential bugs even before running the code.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 5. Isolate and Reproduce</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Try to reduce the problem into a small test case</li>
    <li>Comment out sections to pinpoint where things go wrong</li>
    <li>Use <code>typeof</code> and <code>Array.isArray()</code> to verify data types</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Extra Tips</h2>
  <ul class="list-disc list-inside mb-6">
    <li>Clear browser cache if changes aren’t showing</li>
    <li>Use strict mode: <code>'use strict';</code></li>
    <li>Use source maps when working with minified or compiled code</li>
    <li>Log stack traces with <code>console.trace()</code></li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Pro Tip:</strong> Modern editors like VS Code can debug JavaScript directly using breakpoints inside the editor.
  </div>

 <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/jest-basics') ?>" class="hover:underline">← Previous: Testing with Jest</a>
    <a href="<?= base_url('js/async-debug') ?>" class="hover:underline ms-auto">Next: Debug Async →</a>
</div>
</main>
