<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/async-js" class="text-blue-600 hover:underline dark:text-blue-400">Async JS</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Loading Indicators</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔄 Showing Loading Indicators in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Loading indicators help users understand that data is being fetched or a process is in progress. In React, you can easily show loaders using conditional rendering based on a loading state.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Simple Text Loader -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🕓 1. Simple Text or Spinner</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can show a loading message or a custom spinner using conditional rendering:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function UserList({ isLoading, users }) {
  if (isLoading) return &lt;p&gt;Loading...&lt;/p&gt;;

  return (
    &lt;ul&gt;
      {users.map(u =&gt; &lt;li key={u.id}&gt;{u.name}&lt;/li&gt;)}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Tailwind Spinner -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Tailwind CSS Spinner</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use Tailwind utility classes to make a basic spinning loader:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
&lt;div className="flex justify-center items-center"&gt;
  &lt;div className="w-6 h-6 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"&gt;&lt;/div&gt;
&lt;/div&gt;
</code></pre>

  <!-- Loader Components -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 3. Reusable Loader Component</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can encapsulate a spinner into a reusable component:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function Spinner() {
  return (
    &lt;div className="flex justify-center items-center"&gt;
      &lt;div className="w-6 h-6 border-4 border-blue-500 border-t-transparent rounded-full animate-spin"&gt;&lt;/div&gt;
    &lt;/div&gt;
  );
}

// Usage
{isLoading ? &lt;Spinner /&gt; : &lt;UserList users={data} /&gt;}
</code></pre>

  <!-- Third-Party Libraries -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 4. Using Libraries (Optional)</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>react-loader-spinner</code></li>
    <li><code>react-spinners</code></li>
    <li><code>lottie-react</code> for animated illustrations</li>
  </ul>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Example: react-loader-spinner
import { Circles } from 'react-loader-spinner';

&lt;Circles height="80" width="80" color="#4fa94d" ariaLabel="loading" /&gt;
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Track <code>isLoading</code> state in your component</li>
    <li>Show a loader UI while data is fetching</li>
    <li>Use Tailwind or third-party libraries to customize appearance</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/error-boundaries" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Error Boundaries →
    </a>
  </div>

</main>
