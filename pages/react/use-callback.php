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
      <li class="flex items-center">useCallback()</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔁 useCallback() in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    The <code>useCallback()</code> hook memoizes a function — preventing it from being recreated on every render unless its dependencies change.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 1. Why useCallback?</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Without <code>useCallback()</code>, child components receiving functions as props may re-render unnecessarily.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useCallback, useState } from 'react';

function Parent() {
  const [count, setCount] = useState(0);

  const handleClick = useCallback(() =&gt; {
    console.log('Button clicked');
  }, []);

  return (
    &lt;&gt;
      &lt;Child onClick={handleClick} /&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Increment&lt;/button&gt;
    &lt;/&gt;
  );
}

function Child({ onClick }) {
  console.log('Child rendered');
  return &lt;button onClick={onClick}&gt;Click Me&lt;/button&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Syntax</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const memoizedFn = useCallback(() =&gt; {
  // function logic
}, [dependency1, dependency2]);
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 3. When to Use</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Passing callbacks to memoized child components</li>
    <li>Preventing unnecessary renders</li>
    <li>Stable function reference across renders</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛑 4. Avoid Overuse</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Only use <code>useCallback()</code> when you actually see performance issues. Adding unnecessary hooks can clutter your code.
  </p>

  <p class="text-black dark:text-gray-300">
    For memoizing values instead of functions, use <code>useMemo()</code>.
  </p>

  <!-- Next Page Navigation -->
<div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/use-memo') ?>" class="hover:underline">← Previous: useMemo()</a>
  <a href="<?= base_url('react/custom-hooks') ?>" class="hover:underline ms-auto">Next: Custom Hooks →</a>
</div>

</main>
