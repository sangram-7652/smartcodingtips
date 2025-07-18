<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/debugging" class="text-blue-600 hover:underline dark:text-blue-400">Debugging</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">React DevTools</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🛠️ Using React DevTools</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React Developer Tools is a powerful browser extension that allows you to inspect the component hierarchy, props, state, and hooks in your React apps.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Install -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Installation</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>
      <a href="https://chrome.google.com/webstore/detail/react-developer-tools/fmkadmapgofadopljbjfkapdkoienihi" target="_blank" class="text-blue-600 dark:text-blue-400 underline">
        Chrome Extension
      </a>
    </li>
    <li>
      <a href="https://addons.mozilla.org/en-US/firefox/addon/react-devtools/" target="_blank" class="text-blue-600 dark:text-blue-400 underline">
        Firefox Add-on
      </a>
    </li>
  </ul>

  <!-- Features -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 2. Key Features</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6 space-y-2">
    <li><strong>Component Tree:</strong> Visualize the component hierarchy</li>
    <li><strong>Props & State:</strong> View and edit live values</li>
    <li><strong>Hooks:</strong> See hook names and values (e.g., <code>useState</code>, <code>useReducer</code>)</li>
    <li><strong>Profiler:</strong> Measure render time and performance bottlenecks</li>
  </ul>

  <!-- How to Use -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧭 3. How to Use</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Open your app in the browser</li>
    <li>Open Developer Tools (Right click → Inspect or <kbd>F12</kbd>)</li>
    <li>Switch to the <strong>⚛️ Components</strong> or <strong>Profiler</strong> tab</li>
    <li>Click on a component to inspect its props, state, and hooks</li>
  </ul>

  <!-- Profiler -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📊 4. Profiler Tab</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    The Profiler lets you:
  </p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Record rendering performance</li>
    <li>Find unnecessary re-renders</li>
    <li>Optimize slow components</li>
  </ul>

  <!-- Tip -->
  <div class="bg-blue-100 dark:bg-blue-900 text-blue-800 dark:text-blue-200 p-4 rounded mb-6">
    💡 You can rename hooks in DevTools by naming your custom hooks clearly (e.g., <code>useAuth()</code> instead of <code>useSomething()</code>).
  </div>

  <!-- Bonus -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Bonus Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use the search bar to find components fast</li>
    <li>Click the eye icon to highlight the DOM node in the page</li>
    <li>Use the “Rendered by” section to trace component hierarchy</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/a11y') ?>" class="hover:underline">← Previous: Accessibility</a>
  <span></span>
</div>

</main>
