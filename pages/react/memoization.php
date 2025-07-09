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
      <li class="flex items-center">Memoization</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧠 Memoization in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Memoization helps optimize React apps by preventing unnecessary calculations or re-renders. React provides built-in tools like <code>useMemo</code>, <code>useCallback</code>, and <code>React.memo</code> to achieve this.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- useMemo -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧮 1. useMemo()</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    <code>useMemo</code> caches the result of a function. It's useful for expensive calculations.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const expensiveValue = useMemo(() =&gt; {
  return computeHeavyTask(input);
}, [input]);
</code></pre>

  <!-- useCallback -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 2. useCallback()</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    <code>useCallback</code> memoizes a function itself, preventing it from being re-created unless dependencies change.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const handleClick = useCallback(() =&gt; {
  console.log("Clicked");
}, []);
</code></pre>

  <!-- React.memo -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. React.memo()</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Wrap components with <code>React.memo</code> to prevent re-renders when props haven't changed.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const Button = React.memo(({ onClick, children }) =&gt; {
  return &lt;button onClick={onClick}&gt;{children}&lt;/button&gt;;
});
</code></pre>

  <!-- When to Use -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 4. When to Use Memoization</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Heavy computation inside render</li>
    <li>Child components re-rendering unnecessarily</li>
    <li>Same function passed as prop on every render</li>
  </ul>

  <!-- Gotchas -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 5. Common Mistakes</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Overusing <code>useMemo</code> for cheap operations</li>
    <li>Missing or incorrect dependency arrays</li>
    <li>Assuming memoization always improves performance</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 6. Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>useMemo</code> caches computed values</li>
    <li><code>useCallback</code> caches functions</li>
    <li><code>React.memo</code> skips re-rendering unchanged components</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/performance-tools" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: React Performance Tools →
    </a>
  </div>

</main>
