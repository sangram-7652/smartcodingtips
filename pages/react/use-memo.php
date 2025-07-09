<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/performance-hooks" class="text-blue-600 hover:underline dark:text-blue-400">Performance</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">useMemo()</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧠 useMemo() in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <code>useMemo()</code> is a performance optimization hook in React. It memorizes the result of a computation so it only re-runs when its dependencies change.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚡ 1. Why useMemo?</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Avoid re-running expensive calculations on every render by memoizing the result:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useMemo, useState } from 'react';

function ExpensiveComponent({ num }) {
  const result = useMemo(() =&gt; {
    console.log('Calculating...');
    let total = 0;
    for (let i = 0; i &lt; 100000000; i++) {
      total += i;
    }
    return total * num;
  }, [num]);

  return &lt;p&gt;Calculated Value: {result}&lt;/p&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 2. Syntax</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const memoizedValue = useMemo(() =&gt; computeExpensiveValue(a, b), [a, b]);
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 3. When to Use</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Heavy or expensive computations</li>
    <li>Deriving values from props or state</li>
    <li>Preventing unnecessary re-renders</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 4. Don't Overuse It</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Only use <code>useMemo()</code> when there's a real performance bottleneck. Otherwise, it adds unnecessary complexity.
  </p>

  <p class="text-black dark:text-gray-300">
    Remember: <code>useMemo()</code> caches a value — not a function. For memoizing functions, use <code>useCallback()</code>.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/use-callback" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: useCallback() →
    </a>
  </div>

</main>
