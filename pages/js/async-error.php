<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/async-error-handling" class="text-blue-600 dark:text-blue-400 hover:underline">Async Error Handling</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🚨 Error Handling in Async Code</h1>

  <p class="mb-4">
    When working with Promises and <code>async/await</code>, handling errors properly is crucial to prevent crashes and unexpected behavior.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">❌ Without Error Handling</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>async function getData() {
  const res = await fetch('https://invalid-url');
  const data = await res.json(); // If fetch fails, this will not run
  console.log(data);
}

getData();</code></pre>
  <p class="mb-4">This will throw a runtime error if the fetch fails.</p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ Using try...catch with async/await</h2>
  <pre class="bg-gray-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>async function getData() {
  try {
    const res = await fetch('https://invalid-url');
    if (!res.ok) {
      throw new Error('❌ Network response was not ok');
    }
    const data = await res.json();
    console.log(data);
  } catch (error) {
    console.error('🔥 Error:', error.message);
  } finally {
    console.log("✅ Finished trying to fetch data");
  }
}

getData();</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Common Scenarios</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Network errors (invalid URLs, server down)</li>
    <li>JSON parsing issues</li>
    <li>Timeouts or unresponsive APIs</li>
    <li>Manually thrown errors inside async blocks</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">💡 Tips</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Always wrap async logic inside <code>try...catch</code></li>
    <li>Use <code>finally</code> for cleanup actions</li>
    <li>Check <code>res.ok</code> before using <code>res.json()</code></li>
    <li>Use error boundaries in UI frameworks like React</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded mt-6">
    💡 <strong>Reminder:</strong> Unhandled Promise rejections will crash Node.js apps and be silenced in browsers. Always handle errors!
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/promises-review') ?>" class="hover:underline">← Previous: Promises Review</a>
    <a href="<?= base_url('js/testing-intro') ?>" class="hover:underline ms-auto">Next: Intro to Testing →</a>
</div>

</main>
