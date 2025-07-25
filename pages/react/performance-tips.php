<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/optimization" class="text-blue-600 hover:underline dark:text-blue-400">Optimization</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Performance Tips</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚀 React Performance Tips</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React is fast by default, but poor practices or large-scale apps can introduce lag. Here's a collection of practical tips to boost performance and maintain a responsive UI.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 1. General Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Keep components small and focused</li>
    <li>Use <code>key</code> props correctly in lists</li>
    <li>Avoid unnecessary re-renders with <code>React.memo</code></li>
    <li>Split large pages using code-splitting/lazy loading</li>
  </ul>

  <!-- useMemo/useCallback -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 2. useMemo & useCallback</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>useMemo</code> to memoize expensive calculations</li>
    <li>Use <code>useCallback</code> to prevent re-creating functions on each render</li>
    <li>Avoid overusing them — they add overhead if misused</li>
  </ul>

  <!-- Virtualization -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Virtualize Long Lists</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use libraries like <code>react-window</code> or <code>react-virtualized</code> to render only visible items instead of the full list.
  </p>

  <!-- Avoid inline functions -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 4. Avoid Inline Functions in JSX</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Inline arrow functions create new instances on every render, possibly causing unnecessary re-renders in child components.
  </p>

  <!-- Avoid anonymous objects -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 5. Avoid New Objects/Arrays in Props</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Doing <code>&lt;Comp style={{ margin: 10 }} /&gt;</code> or <code>&lt;Comp items={[]} /&gt;</code> creates new references, triggering re-renders.
  </p>

  <!-- DevTools & Profiler -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛠️ 6. Use DevTools & Profiler</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>React DevTools</code> for inspecting component re-renders</li>
    <li>Use <code>&lt;Profiler&gt;</code> to measure actual render time</li>
    <li>Use <code>why-did-you-render</code> in dev to detect unwanted renders</li>
  </ul>

  <!-- Bundle Optimization -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 7. Optimize Bundle Size</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>React.lazy</code> and <code>Suspense</code> for component-level splitting</li>
    <li>Analyze and reduce bundle size using tools like <code>webpack-bundle-analyzer</code></li>
    <li>Load images and assets lazily</li>
  </ul>

  <!-- Avoid Expensive State -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 8. Keep State Local Where Possible</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Move state close to the component that uses it</li>
    <li>Global state updates can trigger unnecessary re-renders</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Measure performance before optimizing</li>
    <li>Virtualize lists and defer heavy content</li>
    <li>Memoize only when necessary</li>
    <li>Split and lazy-load code as needed</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/code-splitting') ?>" class="hover:underline">← Previous: Code Splitting</a>
  <a href="<?= base_url('react/testing-intro') ?>" class="hover:underline ms-auto">Next: Why Testing? →</a>
</div>

</main>
