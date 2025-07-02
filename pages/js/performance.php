<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/performance-tips" class="text-blue-600 hover:underline">Best Practices</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Performance Tips</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🚀 JavaScript Performance Tips</h1>

  <p class="mb-4">
    Writing efficient JavaScript not only improves user experience but also boosts SEO and reduces CPU usage. Here's a set of practical tips to write faster, leaner code.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🎯 1. Minimize DOM Access</h2>
  <p class="mb-4">
    Accessing and manipulating the DOM is relatively slow. Cache DOM lookups and avoid excessive changes.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>// ❌ Bad
document.getElementById("user").style.display = "none";
document.getElementById("user").style.color = "red";

// ✅ Better
const userEl = document.getElementById("user");
userEl.style.display = "none";
userEl.style.color = "red";</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🔄 2. Debounce & Throttle Events</h2>
  <p class="mb-4">
    Prevent rapid-fire event handlers (like <code>scroll</code> or <code>resize</code>) from bogging down performance.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>// Debounce Example
function debounce(func, delay) {
  let timeout;
  return function () {
    clearTimeout(timeout);
    timeout = setTimeout(func, delay);
  };
}

window.addEventListener("resize", debounce(() => {
  console.log("Window resized!");
}, 300));</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🧮 3. Use Local Variables</h2>
  <p class="mb-4">
    Local variables are faster to access than globals or object properties.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>// ❌ Slower
for (let i = 0; i < arr.length; i++) {}

// ✅ Faster
const len = arr.length;
for (let i = 0; i < len; i++) {}</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🧹 4. Remove Unused Code & Variables</h2>
  <p class="mb-4">
    Clean, minimal code runs faster and is easier to maintain. Dead code also bloats bundle size.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">📦 5. Minify & Bundle</h2>
  <p class="mb-4">
    Use tools like <code>Vite</code>, <code>Webpack</code>, or <code>esbuild</code> to minify and bundle your JS files for production.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🌐 6. Load Scripts Efficiently</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use <code>defer</code> to delay script execution until DOM is ready.</li>
    <li>Place scripts at the end of <code>&lt;body&gt;</code> if not using <code>defer</code>.</li>
    <li>Use <code>async</code> for third-party, non-blocking scripts.</li>
  </ul>

  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>&lt;script src="main.js" defer&gt;&lt;/script&gt;</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🧠 7. Avoid Memory Leaks</h2>
  <p class="mb-4">
    Always clean up timers, intervals, and event listeners to prevent memory bloat.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>const interval = setInterval(() => {
  // Do something
}, 1000);

// Clear it when no longer needed
clearInterval(interval);</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">📈 8. Profile and Measure</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use Chrome DevTools → Performance Tab</li>
    <li>Use <code>console.time()</code> and <code>console.timeEnd()</code></li>
    <li>Look for slow scripts, reflows, and repaints</li>
  </ul>

  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>console.time("loop");
for (let i = 0; i < 10000; i++) {
  // simulate task
}
console.timeEnd("loop");</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">✅ Summary Checklist</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Minimize DOM access</li>
    <li>Debounce/throttle expensive events</li>
    <li>Cache values in loops</li>
    <li>Clean unused code</li>
    <li>Use efficient loading strategies</li>
    <li>Profile and fix performance bottlenecks</li>
  </ul>

  <p class="mt-4">Apply these tips to every project for a smoother, faster JavaScript experience!</p>

</main>
