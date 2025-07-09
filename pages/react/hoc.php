<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/advanced-patterns" class="text-blue-600 hover:underline dark:text-blue-400">Advanced Patterns</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">HOC</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🌀 Higher-Order Components (HOC)</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A <strong>Higher-Order Component (HOC)</strong> is a function that takes a component and returns a new component with added functionality. It's a pattern for reusing component logic.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Definition -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📘 1. What is an HOC?</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    An HOC is a **pure function** — it doesn’t modify the input component, but returns a new one. Common use cases include authentication, logging, conditional rendering, and more.
  </p>

  <!-- Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 2. Example: WithLoading HOC</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function withLoading(Component) {
  return function WrappedComponent({ isLoading, ...props }) {
    if (isLoading) {
      return &lt;p&gt;Loading...&lt;/p&gt;;
    }
    return &lt;Component {...props} /&gt;;
  };
}
</code></pre>

  <!-- Usage -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 3. Usage</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function UserList({ users }) {
  return (
    &lt;ul&gt;
      {users.map(u =&gt; &lt;li key={u.id}&gt;{u.name}&lt;/li&gt;)}
    &lt;/ul&gt;
  );
}

const UserListWithLoading = withLoading(UserList);

// In App:
&lt;UserListWithLoading isLoading={false} users={userData} /&gt;
</code></pre>

  <!-- Benefits -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. Why Use HOCs?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Logic reuse across components</li>
    <li>Separation of concerns</li>
    <li>Can wrap components without altering their structure</li>
  </ul>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 5. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use descriptive HOC names (e.g. <code>withAuth</code>, <code>withLogging</code>)</li>
    <li>Do not mutate the original component</li>
    <li>Pass props transparently with <code>{...props}</code></li>
    <li>Avoid unnecessary nesting and complexity</li>
  </ul>

  <!-- Warning -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 6. Drawbacks</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Can lead to "wrapper hell" (too many nested components)</li>
    <li>Less intuitive than hooks for some cases</li>
    <li>Hooks are generally preferred in modern React</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/hooks-vs-hoc-vs-render-props" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Hooks vs HOC vs Render Props →
    </a>
  </div>

</main>
