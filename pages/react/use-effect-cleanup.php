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
      <li class="text-black dark:text-gray-400">Cleanup in useEffect</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧹 Cleanup in useEffect()</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In React, cleanup functions inside <code>useEffect()</code> help prevent memory leaks by removing subscriptions, timers, or listeners when a component unmounts or re-renders.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why Cleanup Matters -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">❗ Why Cleanup Is Important</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Prevents memory leaks in long-running applications</li>
    <li>Clears timers, intervals, and subscriptions</li>
    <li>Avoids unwanted behavior like duplicated event listeners</li>
  </ul>

  <!-- Example: setInterval -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🕒 Example: setInterval Cleanup</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>import React, { useState, useEffect } from "react";

function Timer() {
  const [count, setCount] = useState(0);

  useEffect(() => {
    const timer = setInterval(() => {
      setCount(prev => prev + 1);
    }, 1000);

    return () => {
      clearInterval(timer); // 🔁 Clean up the interval
    };
  }, []);

  return &lt;p&gt;Seconds: {count}&lt;/p&gt;;
}
</code></pre>

  <p class="text-black dark:text-gray-300 mb-6">
    Without cleanup, the interval would continue even after the component is removed from the DOM.
  </p>

  <!-- Example: Event Listener -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🖱️ Example: Event Listener Cleanup</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>useEffect(() => {
  function handleResize() {
    console.log("Window resized");
  }

  window.addEventListener("resize", handleResize);

  return () => {
    window.removeEventListener("resize", handleResize); // ❌ Prevent multiple listeners
  };
}, []);
</code></pre>

  <p class="text-black dark:text-gray-300 mb-6">
    Always clean up event listeners to avoid multiple identical callbacks running.
  </p>

  <!-- When Cleanup Runs -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📅 When Does Cleanup Run?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>When the component unmounts (like navigating away)</li>
    <li>Before running a new effect (if dependencies change)</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Return a function inside <code>useEffect()</code> to handle cleanup</li>
    <li>Useful for intervals, subscriptions, event listeners</li>
    <li>Improves performance and stability of your app</li>
  </ul>

  <!-- Next Page -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/useref" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: useRef() →
    </a>
  </div>

</main>
