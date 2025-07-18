<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/styling" class="text-blue-600 hover:underline dark:text-blue-400">Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">CSS Modules</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🎨 CSS Modules in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>CSS Modules</strong> allow you to write traditional CSS scoped to individual components — preventing class name conflicts and global pollution.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. File Naming</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Name your stylesheet as <code>ComponentName.module.css</code> to enable CSS Modules.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// Button.module.css
.button {
  background-color: #1d4ed8;
  color: white;
  padding: 8px 16px;
  border-radius: 6px;
  font-weight: bold;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Import & Use Styles</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Import the styles as an object and reference classes as properties:
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import styles from './Button.module.css';

function Button() {
  return &lt;button className={styles.button}&gt;Click Me&lt;/button&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔒 3. Scoped Styling</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>CSS Modules generate unique class names at build time.</li>
    <li>This ensures styles are applied only to the intended component.</li>
    <li>No global style conflicts — safe for large apps!</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 4. Conditional Classes</h2>
  <p class="mb-2 text-black dark:text-gray-300">Use template literals or libraries like <code>clsx</code> for conditionals:</p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
&lt;button className={`${styles.button} ${isActive ? styles.active : ''}`}&gt;
  Submit
&lt;/button&gt;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 5. When to Use</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>You want traditional CSS with scoped behavior.</li>
    <li>You don’t want to set up CSS-in-JS or utility frameworks.</li>
    <li>Good balance of simplicity and control for small/medium projects.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
    <a href="<?= base_url('react/comparison') ?>" class="hover:underline">← Previous: Tool Comparison</a>
    <a href="<?= base_url('react/tailwind') ?>" class="hover:underline">Next: Tailwind CSS →</a>
  </div>

</main>