<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state-management" class="text-blue-600 hover:underline dark:text-blue-400">State Management</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Zustand</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🐻 Zustand – Lightweight Global State for React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Zustand</strong> is a minimal, fast, and scalable state management library for React applications. It doesn’t require Context, reducers, or boilerplate code.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 1. Installation</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install zustand
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Create a Store</h2>
  <p class="mb-2 text-black dark:text-gray-300">Define your global state using a simple function:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// store.js
import { create } from 'zustand';

const useCounterStore = create((set) => ({
  count: 0,
  increment: () => set((state) => ({ count: state.count + 1 })),
  decrement: () => set((state) => ({ count: state.count - 1 })),
}));

export default useCounterStore;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 3. Use the Store in Components</h2>
  <p class="mb-2 text-black dark:text-gray-300">Access the state and actions inside your components:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import useCounterStore from './store';

function Counter() {
  const { count, increment, decrement } = useCounterStore();

  return (
    &lt;div&gt;
      &lt;p&gt;Count: {count}&lt;/p&gt;
      &lt;button onClick={increment}&gt;+&lt;/button&gt;
      &lt;button onClick={decrement}&gt;-&lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 4. Selectively Read State</h2>
  <p class="mb-2 text-black dark:text-gray-300">To avoid unnecessary re-renders, you can subscribe to just part of the store:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const count = useCounterStore((state) => state.count);
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Why Use Zustand?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>No Provider needed</li>
    <li>Simple API & great dev experience</li>
    <li>Fast and reactive</li>
    <li>Works well with async logic</li>
    <li>Perfect for small to medium projects</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/form-handling" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Controlled Forms →
    </a>
  </div>

</main>
