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
      <li class="text-black dark:text-gray-400">Conditional Lists & Empty States</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧾 Conditional Lists & Empty States in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Sometimes, the data you're rendering may be empty or need conditional rendering logic. React makes it easy to handle such situations cleanly.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Section: Basic Conditional List -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Showing a List Only When Items Exist</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use a conditional check to render the list only when there’s data.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function TodoList({ todos }) {
  return (
    &lt;div&gt;
      {todos.length &gt; 0 &amp;&amp; (
        &lt;ul&gt;
          {todos.map((todo) =&gt; (
            &lt;li key={todo.id}&gt;✅ {todo.text}&lt;/li&gt;
          ))}
        &lt;/ul&gt;
      )}
    &lt;/div&gt;
  );
}
</code></pre>

  <!-- Section: Empty State -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 Handling Empty States Gracefully</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    When no data is present, show a message or fallback UI.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function TodoList({ todos }) {
  if (todos.length === 0) {
    return &lt;p&gt;No tasks found. You're all caught up! 🎉&lt;/p&gt;;
  }

  return (
    &lt;ul&gt;
      {todos.map((todo) =&gt; (
        &lt;li key={todo.id}&gt;{todo.text}&lt;/li&gt;
      ))}
    &lt;/ul&gt;
  );
}
</code></pre>

  <!-- Section: Ternary Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">❓ Using Ternary Operator</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can also write a concise version using a ternary expression:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function TodoList({ todos }) {
  return (
    &lt;div&gt;
      {todos.length === 0 
        ? &lt;p&gt;No items to display&lt;/p&gt; 
        : &lt;ul&gt;
            {todos.map(todo =&gt; (
              &lt;li key={todo.id}&gt;{todo.text}&lt;/li&gt;
            ))}
          &lt;/ul&gt;
      }
    &lt;/div&gt;
  );
}
</code></pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Always check array length before mapping.</li>
    <li>Show a friendly empty message to improve UX.</li>
    <li>Extract logic into smaller components when lists become complex.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Render lists only when they contain items.</li>
    <li>Handle empty states with conditional logic.</li>
    <li>Use concise syntax like <code>&amp;&amp;</code> or ternaries for small checks.</li>
  </ul>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/dynamic-lists') ?>" class="hover:underline">← Previous: Dynamic List Rendering</a>
  <a href="<?= base_url('react/events') ?>" class="hover:underline ms-auto">Next: Handling Events →</a>
</div>

</main>
