<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state-sharing" class="text-blue-600 hover:underline dark:text-blue-400">State Sharing</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">useReducer()</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚙️ useReducer() in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <code>useReducer()</code> is a powerful hook used for managing complex state logic in React. It's a great alternative to <code>useState()</code> when dealing with multiple related state values or transitions.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛠 1. Basic Counter Example</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    A reducer function takes the current state and an action, then returns a new state.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useReducer } from 'react';

function reducer(state, action) {
  switch (action.type) {
    case 'increment':
      return { count: state.count + 1 };
    case 'decrement':
      return { count: state.count - 1 };
    default:
      return state;
  }
}

function Counter() {
  const [state, dispatch] = useReducer(reducer, { count: 0 });

  return (
    &lt;div&gt;
      &lt;p&gt;Count: {state.count}&lt;/p&gt;
      &lt;button onClick={() =&gt; dispatch({ type: 'increment' })}&gt;+&lt;/button&gt;
      &lt;button onClick={() =&gt; dispatch({ type: 'decrement' })}&gt;-&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. When to Use useReducer()</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Managing complex state logic</li>
    <li>Multiple sub-values in a state object</li>
    <li>State transitions based on actions</li>
    <li>More predictable state updates (like Redux)</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 3. Anatomy of useReducer</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>reducer</code>: function to update state</li>
    <li><code>state</code>: current state value</li>
    <li><code>dispatch</code>: function to send actions</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 4. Common Pattern</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const [state, dispatch] = useReducer(reducer, initialState);

dispatch({ type: 'action_type', payload: value });
</code></pre>

  <p class="text-black dark:text-gray-300">
    You can enhance this pattern with context to build scalable global state management like Redux — without external libraries.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/context-api-intro" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Context API Introduction →
    </a>
  </div>

</main>
