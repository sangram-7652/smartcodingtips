<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/hooks" class="text-blue-600 hover:underline dark:text-blue-400">Hooks</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Displaying Data</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📊 Displaying Data in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Once you've fetched data using <code>fetch()</code> or <code>Axios</code>, you'll usually want to display it in a component. This guide shows how to render that data conditionally and clearly.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 1. Mapping Over Data</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Use <code>map()</code> to loop through arrays and render JSX elements dynamically.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 text-sm rounded overflow-x-auto text-black dark:text-white mb-4"><code>
const users = [
  { id: 1, name: 'Alice' },
  { id: 2, name: 'Bob' },
];

function UserList() {
  return (
    &lt;ul&gt;
      {users.map(user =&gt; (
        &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Conditional Rendering</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    You can show loading states, handle empty lists, or show errors using conditionals.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 text-sm rounded overflow-x-auto text-black dark:text-white mb-4"><code>
if (loading) return &lt;p&gt;Loading...&lt;/p&gt;;
if (error) return &lt;p&gt;Error: {error}&lt;/p&gt;;
if (data.length === 0) return &lt;p&gt;No items found.&lt;/p&gt;;
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 3. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Always provide a <code>key</code> when rendering lists</li>
    <li>Keep fallback states like loading and error</li>
    <li>Extract repeated UI into components</li>
  </ul>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/axios') ?>" class="hover:underline">← Previous: Axios</a>
  <a href="<?= base_url('react/forms-controlled') ?>" class="hover:underline">Next: Controlled Forms →</a>
</div>

</main>
