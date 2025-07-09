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
      <li class="flex items-center">Lazy Loading</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⏳ Lazy Loading in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Lazy loading helps improve performance by loading components only when needed. React provides built-in support using <code>React.lazy</code> and <code>Suspense</code>.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Lazy Load -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛠️ 1. React.lazy + Suspense</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use <code>React.lazy</code> to dynamically import a component. Wrap it with <code>Suspense</code> to show a fallback while it loads.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import React, { lazy, Suspense } from 'react';

const LazyComponent = lazy(() =&gt; import('./MyComponent'));

function App() {
  return (
    &lt;Suspense fallback={&lt;div&gt;Loading...&lt;/div&gt;}&gt;
      &lt;LazyComponent /&gt;
    &lt;/Suspense&gt;
  );
}
</code></pre>

  <!-- Code Splitting -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Code Splitting on Route</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Lazy loading is commonly used with routes to avoid loading all pages upfront.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { BrowserRouter, Routes, Route } from 'react-router-dom';
const About = lazy(() =&gt; import('./pages/About'));
const Home = lazy(() =&gt; import('./pages/Home'));

function App() {
  return (
    &lt;BrowserRouter&gt;
      &lt;Suspense fallback={&lt;p&gt;Loading page...&lt;/p&gt;}&gt;
        &lt;Routes&gt;
          &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
          &lt;Route path="/about" element={&lt;About /&gt;} /&gt;
        &lt;/Routes&gt;
      &lt;/Suspense&gt;
    &lt;/BrowserRouter&gt;
  );
}
</code></pre>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 3. Tips & Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Only use lazy loading for non-critical components</li>
    <li>Show a meaningful fallback UI (spinner, skeleton, etc.)</li>
    <li>Group components into meaningful chunks</li>
    <li>Combine with route-based code splitting for maximum effect</li>
  </ul>

  <!-- Dynamic Imports Note -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📁 4. Dynamic Imports vs Static Imports</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Unlike regular static imports, dynamic imports with <code>React.lazy()</code> return a Promise and enable deferred loading. This reduces initial bundle size.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/code-splitting" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Code Splitting in React →
    </a>
  </div>

</main>
