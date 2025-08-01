<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/useEffect" class="text-blue-600 dark:text-blue-400 hover:underline">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Using fetch()</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌐 Using <code>fetch()</code> in React</h1>

  <p class="mb-6 text-black dark:text-white">
    The <code>fetch()</code> API is a native JavaScript function used to make HTTP requests. In React, it's commonly used inside the <code>useEffect()</code> hook to load data from an API when a component mounts.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 Example: Fetching Data from an API</h2>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-gray-300 p-4 rounded text-sm mb-4 overflow-x-auto"><code>
import React, { useEffect, useState } from 'react';

function UsersList() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    fetch('https://jsonplaceholder.typicode.com/users')
      .then((res) => res.json())
      .then((data) => setUsers(data));
  }, []);

  return (
    &lt;div&gt;
      &lt;h2&gt;Users&lt;/h2&gt;
      &lt;ul&gt;
        {users.map(user =&gt; (
          &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;
        ))}
      &lt;/ul&gt;
    &lt;/div&gt;
  );
}
  </code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Use <code>useEffect()</code> to run fetch on component mount.</li>
    <li>Always handle loading and error states.</li>
    <li>Use <code>async/await</code> for cleaner syntax if preferred.</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧼 Cleaner Version Using async/await</h2>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-gray-300 p-4 rounded text-sm mb-4 overflow-x-auto"><code>
useEffect(() => {
  const fetchData = async () => {
    try {
      const res = await fetch('https://jsonplaceholder.typicode.com/users');
      const data = await res.json();
      setUsers(data);
    } catch (error) {
      console.error('Failed to fetch users', error);
    }
  };

  fetchData();
}, []);
  </code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li><code>fetch()</code> is used to get data from external APIs.</li>
    <li>Combine with <code>useEffect()</code> for side effects in React.</li>
    <li>Always manage loading, success, and error states.</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600 dark:text-blue-400  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/context-intro') ?>" class="hover:underline">← Previous: Context API Intro</a>
  <a href="<?= base_url('react/fetch-with-effect') ?>" class="hover:underline ms-auto">Next: useEffect + fetch →</a>
</div>


</main>
