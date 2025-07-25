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
      <li class="flex items-center">Axios + useEffect</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📦 useEffect + Axios</h1>

  <p class="mb-6 text-black dark:text-white">
    Axios is a promise-based HTTP client that's often preferred over fetch due to cleaner syntax and built-in JSON parsing. Here’s how to use it inside <code>useEffect()</code>.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 Example: Fetch Users with Axios</h2>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-gray-300 p-4 rounded text-sm mb-4 overflow-x-auto"><code>
import React, { useEffect, useState } from 'react';
import axios from 'axios';

function UsersList() {
  const [users, setUsers] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    axios.get('https://jsonplaceholder.typicode.com/users')
      .then(res => {
        setUsers(res.data);
        setError(null);
      })
      .catch(err => {
        setError(err.message);
      })
      .finally(() => {
        setLoading(false);
      });
  }, []);

  if (loading) return &lt;p&gt;Loading...&lt;/p&gt;;
  if (error) return &lt;p style={{ color: 'red' }}&gt;Error: {error}&lt;/p&gt;;

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

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 Axios Benefits</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>No need for <code>JSON.parse()</code> — Axios does it automatically</li>
    <li>Better error messages</li>
    <li>Supports request/response interceptors</li>
    <li>Works on both client and server (Node.js)</li>
  </ul>

  <p class="text-black dark:text-white">Install Axios via <code>npm install axios</code> before using it.</p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/loading-error') ?>" class="hover:underline">← Previous: Loading & Error</a>
  <a href="<?= base_url('react/display-data') ?>" class="hover:underline ms-auto">Next: Displaying Data →</a>
</div>

</main>
