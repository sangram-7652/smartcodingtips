<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline dark:text-blue-400">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Custom Hooks</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🛠 Custom Hooks in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A **Custom Hook** lets you extract and reuse logic between components. It’s a regular function that uses built-in React hooks like <code>useState</code>, <code>useEffect</code>, etc.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 1. Creating a Custom Hook</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Custom hooks start with <code>use</code> and can contain any reusable logic.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// useCounter.js
import { useState } from 'react';

function useCounter(initialValue = 0) {
  const [count, setCount] = useState(initialValue);

  const increment = () => setCount(prev => prev + 1);
  const decrement = () => setCount(prev => prev - 1);

  return { count, increment, decrement };
}

export default useCounter;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Using the Custom Hook</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use it just like a built-in hook:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import useCounter from './useCounter';

function CounterComponent() {
  const { count, increment, decrement } = useCounter(10);

  return (
    &lt;div&gt;
      &lt;p&gt;Count: {count}&lt;/p&gt;
      &lt;button onClick={increment}&gt;+&lt;/button&gt;
      &lt;button onClick={decrement}&gt;-&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 3. Benefits of Custom Hooks</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Encapsulate logic and reuse it anywhere</li>
    <li>Keep components clean and readable</li>
    <li>Use other hooks inside them</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 4. Naming Rule</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Always start with <code>use</code> — e.g., <code>useForm</code>, <code>useAuth</code>, <code>useDarkMode</code>. This ensures React treats it like a hook.
  </p>

  <p class="text-black dark:text-gray-300">
    Custom hooks help organize logic across large apps by abstracting behavior into standalone, reusable functions.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/login-example" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Login Example →
    </a>
  </div>

</main>
