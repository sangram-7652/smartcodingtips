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
      <li class="text-black dark:text-gray-400">JSX</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📜 Understanding JSX</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    JSX (JavaScript XML) is a syntax extension for JavaScript used in React. It looks like HTML but has the full power of JavaScript. JSX makes it easier to create and manage UI components.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- What is JSX -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 What is JSX?</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    JSX allows you to write HTML-like code within your JavaScript files. It improves readability and provides a more visual structure for components.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
const element = &lt;h1&gt;Hello, JSX!&lt;/h1&gt;;
</pre>

  <!-- Why JSX -->
  <h2 class="text-2xl font-semibold mt-8 mb-4 text-black dark:text-white">✨ Why Use JSX?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Improves readability and structure</li>
    <li>Combines markup with logic (JS + HTML)</li>
    <li>Fully supports JavaScript expressions</li>
  </ul>

  <!-- Embedding JS -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Embedding JavaScript in JSX</h2>
  <p class="mb-4 text-black dark:text-gray-300">You can use curly braces to insert any valid JavaScript expression inside JSX:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
const name = "React";
const element = &lt;h1&gt;Welcome to {name}!&lt;/h1&gt;;
</pre>

  <!-- JSX Rules -->
  <h2 class="text-2xl font-semibold mt-8 mb-4 text-black dark:text-white">📏 JSX Rules to Remember</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>You must return one parent element</li>
    <li>Use <code>className</code> instead of <code>class</code></li>
    <li>Use <code>htmlFor</code> instead of <code>for</code></li>
    <li>Self-close empty tags like <code>&lt;br /&gt;</code></li>
  </ul>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function App() {
  return (
    &lt;div&gt;
      &lt;h1&gt;Hello World&lt;/h1&gt;
      &lt;p className="tagline"&gt;Let's learn JSX!&lt;/p&gt;
    &lt;/div&gt;
  );
}
</pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>JSX is not HTML – it’s a syntax that compiles to <code>React.createElement()</code></li>
    <li>It lets you write UI code in a more expressive, HTML-like format</li>
    <li>JavaScript expressions can be embedded using <code>{ }</code></li>
    <li>Always use valid JSX syntax to avoid errors</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/first-app') ?>" class="hover:underline">← Previous: Your First React App</a>
  <a href="<?= base_url('react/components') ?>" class="hover:underline">Next: Components →</a>
</div>
</main>
