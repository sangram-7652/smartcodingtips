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
      <li class="text-black dark:text-gray-400">Rendering Lists</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📋 Rendering Lists in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In React, rendering lists is a common task — whether it's showing users, products, or posts. The <code>.map()</code> method is your go-to tool.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Map -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">1️⃣ Rendering with <code>.map()</code></h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
const names = ["Alice", "Bob", "Charlie"];

function NameList() {
  return (
    &lt;ul&gt;
      {names.map((name) =&gt; (
        &lt;li&gt;{name}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
</pre>

  <!-- Adding Keys -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">2️⃣ Adding <code>key</code> Props</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Keys help React identify which items changed, are added, or removed:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
const users = [
  { id: 1, name: "Alice" },
  { id: 2, name: "Bob" },
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
</pre>

  <!-- Conditional List -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">3️⃣ Conditional List Rendering</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
function ProductList({ products }) {
  if (products.length === 0) {
    return &lt;p&gt;No products found.&lt;/p&gt;;
  }

  return (
    &lt;ul&gt;
      {products.map((item) =&gt; (
        &lt;li key={item.id}&gt;{item.name}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
</pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>Use unique keys (not array index unless necessary)</li>
    <li>Extract list items into components for clarity</li>
    <li>Use fragments if you don’t need a wrapper element</li>
  </ul>

  <!-- Next Page Link -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/conditional-rendering') ?>" class="hover:underline">← Previous: Conditional Rendering</a>
  <a href="<?= base_url('react/keys') ?>" class="hover:underline ms-auto">Next: Keys in Lists →</a>
</div>
</main>
