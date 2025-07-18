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
      <li class="flex items-center">useContext()</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔁 useContext() in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    The <code>useContext()</code> hook allows you to share state across deeply nested components — without prop drilling. It's great for theme, auth, or global app data.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Create a Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use <code>createContext()</code> to define your global state container.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { createContext } from 'react';

export const ThemeContext = createContext();
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 2. Provide the Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Wrap your components with the <code>Provider</code> to share values.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { ThemeContext } from './ThemeContext';

function App() {
  return (
    &lt;ThemeContext.Provider value="dark"&gt;
      &lt;Home /&gt;
    &lt;/ThemeContext.Provider&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📥 3. Use the Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Access the shared value using <code>useContext()</code> in any child component.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useContext } from 'react';
import { ThemeContext } from './ThemeContext';

function Home() {
  const theme = useContext(ThemeContext);
  return &lt;p&gt;Current theme: {theme}&lt;/p&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 Real-World Use Cases</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Theme switching (light/dark mode)</li>
    <li>Authentication status</li>
    <li>Language / locale settings</li>
    <li>Global app configuration</li>
  </ul>

  <p class="text-black dark:text-gray-300">
    Contexts are best used when you need to share state across many components without passing props manually at every level.
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/route-guards') ?>" class="hover:underline">← Previous: 404 & Protected Routes</a>
  <a href="<?= base_url('react/use-reducer') ?>" class="hover:underline">Next: useReducer() →</a>
</div>

</main>
