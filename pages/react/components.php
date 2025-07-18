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
      <li class="text-black dark:text-gray-400">Components</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧩 React Components</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Components are the heart of React. They let you split the UI into reusable, isolated pieces. You can think of them as custom HTML elements that encapsulate logic and structure.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Types -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Types of Components</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Function Components</strong> – Most common and concise. Written using functions.</li>
    <li><strong>Class Components</strong> – Older approach using ES6 classes (less common now).</li>
  </ul>

  <!-- Function Example -->
  <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">✅ Function Component Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function Welcome() {
  return &lt;h1&gt;Hello, React!&lt;/h1&gt;;
}
</pre>

  <!-- Class Example -->
  <h2 class="text-xl font-semibold mt-6 mb-2 text-black dark:text-white">🏫 Class Component Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
class Welcome extends React.Component {
  render() {
    return &lt;h1&gt;Hello, React!&lt;/h1&gt;;
  }
}
</pre>

  <!-- Naming Rules -->
  <h2 class="text-2xl font-semibold mt-8 mb-4 text-black dark:text-white">📛 Naming and Return Rules</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Component names must start with a capital letter (<code>MyComponent</code>, not <code>myComponent</code>)</li>
    <li>Each component must return a single parent element</li>
    <li>Components can be reused like custom tags</li>
  </ul>

  <!-- Nesting -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 Nesting Components</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    You can place components inside other components just like HTML elements:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function App() {
  return (
    &lt;div&gt;
      &lt;Header /&gt;
      &lt;MainContent /&gt;
      &lt;Footer /&gt;
    &lt;/div&gt;
  );
}
</pre>

  <!-- Reusability -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 Why Components Matter</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Encapsulate logic, style, and structure</li>
    <li>Promote reuse across the application</li>
    <li>Improve maintainability and scalability</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Components are reusable building blocks in React</li>
    <li>Use function components for modern development</li>
    <li>Always return one parent element</li>
    <li>Use proper naming and nesting for clarity</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/jsx') ?>" class="hover:underline">← Previous: JSX</a>
  <a href="<?= base_url('react/props') ?>" class="hover:underline">Next: Props →</a>
</div>

</main>
