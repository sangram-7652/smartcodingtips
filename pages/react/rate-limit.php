<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/security" class="text-blue-600 hover:underline dark:text-blue-400">Security</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Rate Limiting</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚦 Rate Limiting in React Apps</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Rate limiting protects your app and backend from abuse by limiting how often a user or client can make requests. While enforcement typically happens on the backend, React apps can implement basic client-side limits as well.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Server Side Reminder -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛡️ 1. Server-Side Is Critical</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    True protection must be implemented server-side (e.g., via Express middleware like <code>express-rate-limit</code> or APIs like Cloudflare or Nginx). Client-side limits can reduce load but are not secure alone.
  </p>

  <!-- Client Side Throttling -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Throttling in React</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Throttling ensures a function (like an API call) is only triggered at most once every X ms.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useCallback } from 'react';
import throttle from 'lodash.throttle';

function SearchBox() {
  const handleSearch = useCallback(throttle((query) => {
    fetch(`/api/search?q=${query}`);
  }, 1000), []);

  return (
    &lt;input onChange={(e) =&gt; handleSearch(e.target.value)} /&gt;
  );
}
</code></pre>

  <!-- Debouncing -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🕒 3. Debouncing in React</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Debouncing delays function execution until the user stops typing or interacting.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useCallback } from 'react';
import debounce from 'lodash.debounce';

function SearchBox() {
  const handleSearch = useCallback(debounce((query) => {
    fetch(`/api/search?q=${query}`);
  }, 500), []);

  return (
    &lt;input onChange={(e) =&gt; handleSearch(e.target.value)} /&gt;
  );
}
</code></pre>

  <!-- API Response Handling -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚧 4. Handle API Rate Limits</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    If the API responds with a <code>429 Too Many Requests</code> status, you can notify the user or implement retries:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
fetch('/api/data')
  .then(res =&gt; {
    if (res.status === 429) {
      alert("You're making requests too quickly. Please wait.");
    }
    return res.json();
  });
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Server-side rate limiting is essential for protection</li>
    <li>Use <code>throttle</code> and <code>debounce</code> for client-side API call management</li>
    <li>Handle <code>429</code> errors gracefully</li>
    <li>React can reduce redundant traffic, but not block abuse</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/env-vars') ?>" class="hover:underline">← Previous: Environment Variables</a>
  <a href="<?= base_url('react/protect-routes') ?>" class="hover:underline ms-auto">Next: Protected Routes →</a>
</div>

</main>
