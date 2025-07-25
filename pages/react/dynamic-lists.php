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
      <li class="text-black dark:text-gray-400">Dynamic List Rendering</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📄 Dynamic List Rendering in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React makes it easy to render lists of data dynamically. Whether you're rendering user profiles, products, or to-do items — dynamic rendering is at the core of building interactive UIs.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic List -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 Rendering Arrays with <code>.map()</code></h2>
  <p class="text-black dark:text-gray-300 mb-4">
    The most common way to render dynamic content in React is by using the <code>map()</code> function.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
const fruits = ['🍎 Apple', '🍌 Banana', '🍇 Grape'];

function FruitList() {
  return (
    &lt;ul&gt;
      {fruits.map((fruit, index) =&gt; (
        &lt;li key={index}&gt;{fruit}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- List of Objects -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Rendering Lists of Objects</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can also render more complex data, like an array of objects. Just remember to use a <strong>unique key</strong> for each item.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
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

  <!-- List with Components -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 Rendering Components from Lists</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Lists often render custom components dynamically using <code>props</code>.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function User({ name }) {
  return &lt;li&gt;👤 {name}&lt;/li&gt;;
}

function UserList() {
  const users = ['Alice', 'Bob', 'Charlie'];
  return (
    &lt;ul&gt;
      {users.map((name, index) =&gt; (
        &lt;User key={index} name={name} /&gt;
      ))}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 Tips for Dynamic Lists</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Always use a unique <code>key</code> prop to prevent unnecessary re-renders.</li>
    <li>Avoid using <code>index</code> as key when the list can change.</li>
    <li>Use reusable components to keep your list logic clean.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Dynamic lists are rendered using <code>map()</code>.</li>
    <li>You can render text, elements, or full components from arrays.</li>
    <li>Use unique keys to keep DOM updates efficient.</li>
  </ul>

  <!-- Next Page -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/keys') ?>" class="hover:underline">← Previous: Keys in Lists</a>
  <a href="<?= base_url('react/empty-states') ?>" class="hover:underline ms-auto">Next: Conditional Lists & Empty States →</a>
</div>

</main>
