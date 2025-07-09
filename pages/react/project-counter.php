<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/projects" class="text-blue-600 hover:underline dark:text-blue-400">Projects</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Counter App</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔢 Simple Counter App in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A counter app is a classic beginner React project that teaches you how to use state and event handling.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 1. Create Counter Component</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useState } from 'react';

function Counter() {
  const [count, setCount] = useState(0);

  const increment = () =&gt; setCount(count + 1);
  const decrement = () =&gt; setCount(count - 1);
  const reset = () =&gt; setCount(0);

  return (
    &lt;div className="text-center space-y-4"&gt;
      &lt;h2 className="text-2xl font-bold"&gt;Count: {count}&lt;/h2&gt;
      &lt;div className="space-x-2"&gt;
        &lt;button onClick={increment} className="bg-blue-500 px-4 py-2 text-white rounded"&gt;+&lt;/button&gt;
        &lt;button onClick={decrement} className="bg-red-500 px-4 py-2 text-white rounded"&gt;-&lt;/button&gt;
        &lt;button onClick={reset} className="bg-gray-500 px-4 py-2 text-white rounded"&gt;Reset&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  );
}

export default Counter;
</code></pre>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 2. Use in App Component</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import Counter from './Counter';

function App() {
  return (
    &lt;main className="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-900"&gt;
      &lt;Counter /&gt;
    &lt;/main&gt;
  );
}

export default App;
</code></pre>

  <!-- Tailwind CSS Styling Note -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎨 3. Styling with Tailwind CSS</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    This example uses Tailwind classes for quick styling. You can customize button colors, text size, and layout further.
  </p>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Uses <code>useState</code> to manage the counter</li>
    <li>Handles button click events to update state</li>
    <li>Good for understanding React basics like components and hooks</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/todo-app" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Build a To-Do App →
    </a>
  </div>

</main>
