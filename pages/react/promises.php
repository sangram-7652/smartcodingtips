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
      <li class="flex items-center">Promises & Async/Await</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⏳ Promises & Async/Await in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    JavaScript handles asynchronous operations using <strong>Promises</strong> and <strong>async/await</strong>. These are essential for working with APIs, timers, and other non-blocking tasks — especially in React apps.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Promises -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. What is a Promise?</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    A Promise is an object that represents a future value. It can be in one of three states: <code>pending</code>, <code>fulfilled</code>, or <code>rejected</code>.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const promise = new Promise((resolve, reject) => {
  setTimeout(() => {
    resolve("Data loaded!");
  }, 1000);
});

promise.then(data => console.log(data));
</code></pre>

  <!-- Async/Await -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 2. Using Async/Await</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    <code>async/await</code> is syntactic sugar over Promises, making asynchronous code look and behave like synchronous code.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
async function fetchData() {
  const response = await fetch("https://api.example.com/data");
  const data = await response.json();
  console.log(data);
}

fetchData();
</code></pre>

  <!-- Try/Catch -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 3. Error Handling with try/catch</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
async function fetchUser() {
  try {
    const res = await fetch("/user");
    const user = await res.json();
    console.log(user);
  } catch (error) {
    console.error("Error fetching user:", error);
  }
}
</code></pre>

  <!-- In React -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚛️ 4. Using with React useEffect()</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Async calls should be handled inside <code>useEffect</code> for side effects like API calls:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useEffect, useState } from "react";

function Users() {
  const [users, setUsers] = useState([]);

  useEffect(() => {
    async function getUsers() {
      const res = await fetch("https://api.example.com/users");
      const data = await res.json();
      setUsers(data);
    }

    getUsers();
  }, []);

  return (
    &lt;ul&gt;
      {users.map(user =&gt; &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;)}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Promises</strong> allow handling async operations via <code>.then()</code> and <code>.catch()</code></li>
    <li><strong>async/await</strong> simplifies syntax and supports <code>try/catch</code> error handling</li>
    <li>Always use async calls in <code>useEffect</code> in React</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/component-libs') ?>" class="hover:underline">← Previous: UI Libraries</a>
  <a href="<?= base_url('react/async-state') ?>" class="hover:underline">Next: Handling Async State →</a>
</div>

</main>
