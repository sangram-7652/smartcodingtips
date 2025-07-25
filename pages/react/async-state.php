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
      <li class="flex items-center">Handling Async State</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔄 Handling Async State in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Managing state from asynchronous operations like API calls is critical in React. You’ll typically track three things: <strong>loading</strong>, <strong>data</strong>, and <strong>error</strong> — often called the "async state trio."
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Setup -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 1. Basic Pattern</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use three pieces of state: <code>isLoading</code>, <code>data</code>, and <code>error</code>.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useState, useEffect } from "react";

function Users() {
  const [data, setData] = useState([]);
  const [isLoading, setIsLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    async function fetchUsers() {
      try {
        const res = await fetch("https://api.example.com/users");
        if (!res.ok) throw new Error("Network response was not ok");
        const users = await res.json();
        setData(users);
      } catch (err) {
        setError(err.message);
      } finally {
        setIsLoading(false);
      }
    }

    fetchUsers();
  }, []);
</code></pre>

  <!-- Display States -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 2. Displaying Loading / Error / Data</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
if (isLoading) return &lt;p&gt;Loading...&lt;/p&gt;;
if (error) return &lt;p className="text-red-600"&gt;Error: {error}&lt;/p&gt;;

return (
  &lt;ul&gt;
    {data.map(user =&gt; &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;)}
  &lt;/ul&gt;
);
</code></pre>

  <!-- Optional Improvements -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✨ 3. Tips & Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Initialize <code>isLoading</code> as <code>true</code> by default</li>
    <li>Always wrap async calls in try/catch</li>
    <li>Use <code>finally</code> to stop the loading state</li>
    <li>Optionally use <code>AbortController</code> to cancel fetch on unmount</li>
    <li>Debounce or throttle rapid updates (e.g., search input)</li>
  </ul>

  <!-- With Custom Hook -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 4. Create a Reusable Hook</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function useFetch(url) {
  const [data, setData] = useState(null);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    let ignore = false;
    async function fetchData() {
      try {
        const res = await fetch(url);
        if (!res.ok) throw new Error("Error fetching data");
        const json = await res.json();
        if (!ignore) setData(json);
      } catch (err) {
        if (!ignore) setError(err.message);
      } finally {
        if (!ignore) setLoading(false);
      }
    }

    fetchData();
    return () => { ignore = true; };
  }, [url]);

  return { data, loading, error };
}
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Track <code>loading</code>, <code>error</code>, and <code>data</code> separately</li>
    <li>Display each state accordingly to improve UX</li>
    <li>Extract logic into reusable hooks for cleaner code</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/promises') ?>" class="hover:underline">← Previous: Promises & Async/Await</a>
  <a href="<?= base_url('react/loading-skeletons') ?>" class="hover:underline ms-auto">Next: Loading Indicators →</a>
</div>

</main>
