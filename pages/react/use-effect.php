<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline dark:text-blue-400">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">useEffect()</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⏱️ React useEffect() Hook</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <code>useEffect()</code> is a React Hook that lets you perform side effects like fetching data, setting up event listeners, or updating the DOM directly.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Basic Usage</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import React, { useEffect, useState } from 'react';

function App() {
  const [count, setCount] = useState(0);

  useEffect(() => {
    console.log('Component mounted or updated');
  });

  return (
    &lt;div&gt;
      &lt;p&gt;Count: {count}&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;+&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    By default, useEffect runs after every render. You can control this behavior using the dependency array.
  </p>

  <!-- Dependency Array -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 useEffect with Dependency Array</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>useEffect(() => {
  console.log('Runs only once on mount');
}, []);
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    - <code>[]</code> makes the effect run only once (like <code>componentDidMount</code>)
    - Add values inside the array to re-run when they change
  </p>

  <!-- Fetching Data -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 Fetching Data</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>useEffect(() => {
  async function fetchData() {
    const res = await fetch('https://api.example.com/data');
    const data = await res.json();
    console.log(data);
  }
  fetchData();
}, []);
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    You can’t make the <code>useEffect()</code> callback async directly — define an async function inside it.
  </p>

  <!-- Cleanup -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧹 Cleanup Function</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>useEffect(() => {
  const interval = setInterval(() => {
    console.log('Running every second...');
  }, 1000);

  return () => clearInterval(interval); // Cleanup
}, []);
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Cleanup functions prevent memory leaks by clearing timers, subscriptions, or event listeners when a component unmounts.
  </p>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>useEffect()</code> lets you run code after rendering</li>
    <li>It replaces lifecycle methods like <code>componentDidMount</code>, <code>componentDidUpdate</code>, <code>componentWillUnmount</code></li>
    <li>Always handle cleanup for subscriptions/timers</li>
    <li>Use the dependency array to control execution</li>
  </ul>

  <!-- Next Page -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/use-state') ?>" class="hover:underline">← Previous: useState()</a>
  <a href="<?= base_url('react/use-effect-cleanup') ?>" class="hover:underline">Next: Cleanup in useEffect →</a>
</div>

</main>