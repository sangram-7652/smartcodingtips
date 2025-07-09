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

  <h1 class="text-3xl font-bold mb-4 text-black">🔄 useEffect + fetch (with Loading & Error)</h1>

  <p class="mb-6 text-black">
    Fetching data in React using <code>useEffect()</code> is a common pattern. Let's enhance our earlier example with a loading spinner and error message.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">🛠️ Full Example with Loading & Error Handling</h2>

  <pre class="bg-gray-100 text-black p-4 rounded text-sm mb-4 overflow-x-auto"><code>
import React, { useEffect, useState } from 'react';

function UsersList() {
  const [users, setUsers] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchUsers = async () => {
      try {
        const res = await fetch('https://jsonplaceholder.typicode.com/users');
        if (!res.ok) throw new Error('Network response was not ok');
        const data = await res.json();
        setUsers(data);
        setError(null);
      } catch (err) {
        setError(err.message);
      } finally {
        setLoading(false);
      }
    };

    fetchUsers();
  }, []);

  if (loading) return &lt;p&gt;Loading users...&lt;/p&gt;;
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

  <h2 class="text-2xl font-semibold mb-4 text-black">🔍 Explanation</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li><strong>loading:</strong> boolean to show spinner/message before data arrives</li>
    <li><strong>error:</strong> captures any fetch or parsing issues</li>
    <li><code>finally</code> ensures loading is turned off in both success/failure cases</li>
  </ul>

  <p class="text-black">This pattern is helpful in real-world apps where user feedback is critical.</p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/axios" class="text-blue-600 hover:underline">
      Next: Using Axios →
    </a>
  </div>

</main>
