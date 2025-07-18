<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state-sharing" class="text-blue-600 hover:underline dark:text-blue-400">State Sharing</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Props vs Context vs Redux</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚖️ Props vs Context vs Redux</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React offers multiple ways to share data between components. Let's compare <strong>Props</strong>, <strong>Context API</strong>, and <strong>Redux</strong> to understand when to use which one.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 Props</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Best for passing data <strong>from parent to child</strong>.</li>
    <li>Simple and built-in to React.</li>
    <li>No setup or configuration needed.</li>
    <li>Can become tedious for deeply nested components (prop drilling).</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 Context API</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Used to share data <strong>globally</strong> without prop drilling.</li>
    <li>Great for theme, auth, language, etc.</li>
    <li>Works well for <strong>low-frequency</strong> updates.</li>
    <li>Can cause performance issues if overused (every consumer re-renders).</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Redux</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Best for managing <strong>large, complex global state</strong>.</li>
    <li>Good for debugging and time-travel with DevTools.</li>
    <li>Involves extra setup and boilerplate.</li>
    <li>Supports middleware (e.g., for async operations).</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📊 Comparison Table</h2>
  <div class="overflow-x-auto mb-6">
    <table class="min-w-full text-sm text-left border border-gray-300 dark:border-gray-700">
      <thead class="bg-gray-200 dark:bg-gray-800 text-black dark:text-white">
        <tr>
          <th class="px-4 py-2 border">Feature</th>
          <th class="px-4 py-2 border">Props</th>
          <th class="px-4 py-2 border">Context</th>
          <th class="px-4 py-2 border">Redux</th>
        </tr>
      </thead>
      <tbody class="text-black dark:text-gray-300">
        <tr>
          <td class="border px-4 py-2">Complex State</td>
          <td class="border px-4 py-2">❌</td>
          <td class="border px-4 py-2">⚠️</td>
          <td class="border px-4 py-2">✅</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Global Access</td>
          <td class="border px-4 py-2">❌</td>
          <td class="border px-4 py-2">✅</td>
          <td class="border px-4 py-2">✅</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Async Actions</td>
          <td class="border px-4 py-2">❌</td>
          <td class="border px-4 py-2">❌</td>
          <td class="border px-4 py-2">✅</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Ease of Use</td>
          <td class="border px-4 py-2">✅</td>
          <td class="border px-4 py-2">✅</td>
          <td class="border px-4 py-2">⚠️</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Conclusion</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Use Props</strong> for basic parent-child communication.</li>
    <li><strong>Use Context</strong> for simple global state (theme, auth).</li>
    <li><strong>Use Redux</strong> for large-scale apps with complex state logic and async actions.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/custom-hooks') ?>" class="hover:underline">← Previous: Custom Hooks</a>
  <a href="<?= base_url('react/context-api') ?>" class="hover:underline">Next: Context API →</a>
</div>

</main>
