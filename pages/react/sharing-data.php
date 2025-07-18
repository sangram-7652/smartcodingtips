<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state" class="text-blue-600 dark:text-blue-400 hover:underline">State</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Sharing Between Components</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔗 Sharing State Between Components</h1>

  <p class="mb-6 text-black dark:text-white">
    In React, state is typically managed in the component where it's most relevant. But when **multiple components need access to the same state**, you have a few clean ways to share it.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📤 1. Lifting State Up</h2>
  <p class="text-black dark:text-white mb-4">
    If two or more sibling components need access to the same data, move that state up to their common parent. This parent becomes the "source of truth".
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🪝 2. Using Callback Props</h2>
  <p class="text-black dark:text-white mb-4">
    Pass a function from the parent to child so the child can update the parent's state. This allows communication between components indirectly.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 3. Context API</h2>
  <p class="text-black dark:text-white mb-4">
    For deeply nested components that need access to shared state, React provides the <strong>Context API</strong>. It allows you to avoid "prop drilling" and make global values available throughout your component tree.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-black dark:text-gray-300 mb-6"><code>// Create context
const ThemeContext = React.createContext();

// Provide at the top level
&lt;ThemeContext.Provider value="dark"&gt;
  &lt;App /&gt;
&lt;/ThemeContext.Provider&gt;

// Consume inside a child
const theme = React.useContext(ThemeContext);</code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 When to Use Which?</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>🔼 Use <strong>lifting state up</strong> for small apps or sibling components.</li>
    <li>📬 Use <strong>callback props</strong> to allow child-to-parent communication.</li>
    <li>🌐 Use <strong>Context API</strong> for wider or deeper state sharing across components.</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>State should be centralized when multiple components depend on it.</li>
    <li>Lifting state and using callback props works well for smaller scopes.</li>
    <li>Context API is great for global or deeply shared values.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/callback-props') ?>" class="hover:underline">← Previous: Callback Props</a>
  <a href="<?= base_url('react/context-intro') ?>" class="hover:underline">Next: Context API Intro →</a>
</div>

</main>
