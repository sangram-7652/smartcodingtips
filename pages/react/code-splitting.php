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
      <li class="flex items-center">Code Splitting</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📦 Code Splitting in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Code splitting is a powerful optimization technique that allows you to split your code into smaller bundles that can be loaded on demand, improving initial load time and user experience.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why Code Split -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">❓ 1. Why Code Splitting?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Reduce initial bundle size</li>
    <li>Load code only when needed</li>
    <li>Improve performance on slow networks</li>
    <li>Enable faster time-to-interactive</li>
  </ul>

  <!-- Dynamic Import -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📂 2. Dynamic Import with React.lazy()</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    This is the most common approach to split components dynamically:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import React, { lazy, Suspense } from 'react';

const AboutPage = lazy(() => import('./pages/About'));

function App() {
  return (
    &lt;Suspense fallback={&lt;div&gt;Loading...&lt;/div&gt;}&gt;
      &lt;AboutPage /&gt;
    &lt;/Suspense&gt;
  );
}
</code></pre>

  <!-- Route Based -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛣️ 3. Route-Based Splitting</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Works great with <code>react-router</code> to load pages only when needed.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const Home = lazy(() => import('./pages/Home'));
const Contact = lazy(() => import('./pages/Contact'));

&lt;Routes&gt;
  &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
  &lt;Route path="/contact" element={&lt;Contact /&gt;} /&gt;
&lt;/Routes&gt;
</code></pre>

  <!-- Webpack Magic Comments -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✨ 4. Webpack Magic Comments</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can name your chunks for easier debugging:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const LazySettings = lazy(() =&gt; import(/* webpackChunkName: "settings" */ './Settings'));
</code></pre>

  <!-- Libraries -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 5. Other Tools & Libraries</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Loadable Components</strong> – SSR + Code Splitting</li>
    <li><strong>React Loadable</strong> – older but effective</li>
    <li><strong>Next.js</strong> – built-in automatic code splitting</li>
  </ul>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 6. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Split only large or infrequently used components</li>
    <li>Always wrap lazy components in <code>&lt;Suspense&gt;</code></li>
    <li>Use fallback spinners or skeleton loaders</li>
    <li>Test bundle size with Webpack Bundle Analyzer</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/lazy') ?>" class="hover:underline">← Previous: Lazy Loading</a>
  <a href="<?= base_url('react/performance-tips') ?>" class="hover:underline">Next: Performance Tips →</a>
</div>

</main>
