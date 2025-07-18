<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">useEffect + fetch</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔄 useEffect + fetch()</h1>

  <p class="mb-6 text-black dark:text-white">
    In React, <code>useEffect()</code> is commonly used to perform side effects such as data fetching. Combine it with <code>fetch()</code> to retrieve data from APIs when the component mounts.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Basic Example</h2>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black  dark:text-gray-300 p-4 rounded text-sm mb-4 overflow-x-auto"><code>
import React, { useEffect, useState } from 'react';

function UsersList() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    fetch('https://jsonplaceholder.typicode.com/users')
      .then(res => res.json())
      .then(data => setUsers(data));
  }, []);

  return (
    &lt;div&gt;
      &lt;h2&gt;User List&lt;/h2&gt;
      &lt;ul&gt;
        {users.map(user =&gt; (
          &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;
        ))}
      &lt;/ul&gt;
    &lt;/div&gt;
  );
}

export default UsersList;
  </code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧼 Using async/await</h2>
  <p class="text-black dark:text-white mb-4">You can also use <code>async/await</code> inside <code>useEffect</code> for cleaner code. But since <code>useEffect</code> itself can't be async, define an inner function.</p>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black  dark:text-gray-300 p-4 rounded text-sm mb-4 overflow-x-auto"><code>
useEffect(() => {
  const getUsers = async () => {
    try {
      const res = await fetch('https://jsonplaceholder.typicode.com/users');
      const data = await res.json();
      setUsers(data);
    } catch (err) {
      console.error('Error fetching users:', err);
    }
  };

  getUsers();
}, []);
  </code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li><code>useEffect()</code> runs after component render</li>
    <li>Perfect for data fetching with <code>fetch()</code></li>
    <li>Use async functions inside <code>useEffect</code> if needed</li>
    <li>Always handle loading and error states in real apps</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/fetch-api') ?>" class="hover:underline">← Previous: Using fetch()</a>
  <a href="<?= base_url('react/loading-error') ?>" class="hover:underline">Next: Loading & Error →</a>
</div>

</main>
