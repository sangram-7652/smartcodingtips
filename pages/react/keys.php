<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Keys in Lists</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔑 Keys in Lists</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Keys help React efficiently update and re-render list items by identifying which items have changed, been added, or removed.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why Keys -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Why Are Keys Important?</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>They allow React to identify list items uniquely.</li>
    <li>Improve rendering performance and prevent UI bugs.</li>
    <li>Are required when rendering dynamic lists using <code>.map()</code>.</li>
  </ul>

  <!-- Correct Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Using Unique Keys</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
const users = [
  { id: 1, name: "Alice" },
  { id: 2, name: "Bob" }
];

function UserList() {
  return (
    &lt;ul&gt;
      {users.map((user) =&gt; (
        &lt;li key={user.id}&gt;{user.name}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Avoid Index -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 Avoid Using Index as Key</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Keys should be stable and unique. Using the array index may lead to unexpected behavior when the list is modified.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
// ❌ Not recommended
{items.map((item, index) =&gt; (
  &lt;li key={index}&gt;{item}&lt;/li&gt;
))}

// ✅ Better
{items.map((item) =&gt; (
  &lt;li key={item.id}&gt;{item.name}&lt;/li&gt;
))}
</code></pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use unique IDs when available (like database IDs).</li>
    <li>Don't use array indexes unless the list is static and never changes.</li>
    <li>Keep keys consistent between renders to avoid reordering issues.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Keys are crucial for rendering lists efficiently in React.</li>
    <li>Use stable, unique values as keys.</li>
    <li>Avoid using indexes unless there's no alternative.</li>
  </ul>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/rendering-lists') ?>" class="hover:underline">← Previous: Rendering Lists</a>
  <a href="<?= base_url('react/dynamic-lists') ?>" class="hover:underline">Next: Dynamic List Rendering →</a>
</div>

</main>
