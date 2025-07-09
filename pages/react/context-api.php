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
      <li class="flex items-center">Context API</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌐 Context API in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    The <strong>Context API</strong> provides a way to pass data through the component tree without having to pass props down manually at every level. It's ideal for global data like themes, user info, or language settings.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 1. Create a Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">Use <code>createContext()</code> to define your shared state container:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { createContext } from 'react';

export const UserContext = createContext();
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Provide the Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">Wrap your component tree with the <code>Provider</code> and pass in the value:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { UserContext } from './UserContext';

function App() {
  const user = { name: 'John', role: 'admin' };

  return (
    &lt;UserContext.Provider value={user}&gt;
      &lt;Dashboard /&gt;
    &lt;/UserContext.Provider&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📥 3. Use the Context</h2>
  <p class="mb-2 text-black dark:text-gray-300">Inside any child component, access the shared data using <code>useContext()</code>:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useContext } from 'react';
import { UserContext } from './UserContext';

function Dashboard() {
  const user = useContext(UserContext);
  return &lt;p&gt;Welcome, {user.name}!&lt;/p&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. When to Use Context</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Theme (light/dark mode)</li>
    <li>Authentication status</li>
    <li>User preferences</li>
    <li>Language (i18n)</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 5. Performance Tip</h2>
  <p class="text-black dark:text-gray-300">
    Avoid frequent updates in large contexts. Frequent re-renders can slow down performance. In such cases, consider splitting contexts or using Redux/Zustand.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/using-fetch" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Using fetch() →
    </a>
  </div>

</main>
