<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/best-practices" class="text-blue-600 hover:underline dark:text-blue-400">Best Practices</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Clean Code</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧹 Writing Clean Code in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Clean code is not just about formatting — it’s about writing readable, maintainable, and scalable code that others (and future-you) can understand. Here's how to do it in React.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Guidelines -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔤 1. Meaningful Naming</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Name components with <code>PascalCase</code></li>
    <li>Use <code>camelCase</code> for variables and functions</li>
    <li>Use descriptive prop names like <code>onLogin</code> instead of <code>submit</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 2. Keep Components Small</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    Split large components into smaller reusable ones. Each component should do **one thing** well.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Organize Code by Feature</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use a feature-based folder structure</li>
    <li>Group related components, styles, hooks, and context together</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 4. Use Functional Components + Hooks</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Prefer function components with hooks over class components for consistency and cleaner code.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 5. Avoid Repetition (DRY)</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Extract common logic into reusable hooks</li>
    <li>Create reusable UI components</li>
    <li>Move repeated API logic into a service file</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 6. Use PropTypes or TypeScript</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Validate props using <code>PropTypes</code> or adopt <code>TypeScript</code> to prevent bugs and improve developer experience.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 7. Avoid Inline Logic in JSX</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Move conditions, mapping, and calculations out of the return block. Example:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// ❌ Bad
return &lt;div&gt;{items.map(i =&gt; &lt;Item key={i.id} /&gt;)}&lt;/div&gt;

// ✅ Good
const renderedItems = items.map(i =&gt; &lt;Item key={i.id} /&gt;);
return &lt;div&gt;{renderedItems}&lt;/div&gt;;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧼 8. Clean Up useEffect</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Always clear subscriptions, intervals, and side effects to avoid memory leaks:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
useEffect(() =&gt; {
  const interval = setInterval(() =&gt; {
    console.log("tick");
  }, 1000);

  return () =&gt; clearInterval(interval);
}, []);
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧰 9. Use ESLint + Prettier</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Install and configure <code>eslint</code> and <code>prettier</code> to maintain code quality and style automatically.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 10. Comment When Necessary</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Avoid obvious comments. Instead, comment only on complex logic or business rules that aren't self-evident.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/naming') ?>" class="hover:underline">← Previous: Naming Conventions</a>
  <a href="<?= base_url('react/a11y') ?>" class="hover:underline ms-auto">Next: Accessibility →</a>
</div>
</main>
