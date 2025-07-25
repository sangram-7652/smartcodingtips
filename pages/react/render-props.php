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
      <li class="flex items-center">Render Props</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📦 Render Props Pattern in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Render Props</strong> is a pattern in React where a component accepts a function as a prop and calls it to determine what to render. It helps in sharing logic between components using a reusable wrapper.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- What is Render Props -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 1. What is a Render Prop?</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    A <code>render prop</code> is a function prop that returns JSX. The parent component provides rendering logic via this function.
  </p>

  <!-- Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 2. Example: Mouse Tracker</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
class MouseTracker extends React.Component {
  state = { x: 0, y: 0 };

  handleMouseMove = (e) => {
    this.setState({ x: e.clientX, y: e.clientY });
  };

  render() {
    return (
      &lt;div style={{ height: '100px' }} onMouseMove={this.handleMouseMove}&gt;
        {this.props.render(this.state)}
      &lt;/div&gt;
    );
  }
}
</code></pre>

  <!-- Usage -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 3. Usage Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function App() {
  return (
    &lt;MouseTracker render={({ x, y }) =&gt; (
      &lt;h2&gt;Mouse position: ({x}, {y})&lt;/h2&gt;
    )} /&gt;
  );
}
</code></pre>

  <!-- Benefits -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. Why Use Render Props?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Encapsulates reusable logic (like state or effects)</li>
    <li>Flexible rendering with full control in consumer</li>
    <li>Better alternative to HOCs in some cases</li>
  </ul>

  <!-- Alternatives -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 5. Modern Alternatives</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>React Hooks are now preferred for most use cases</li>
    <li>Still useful for class-based components or controlled rendering</li>
  </ul>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Name your render prop consistently (e.g. <code>render</code> or <code>children</code>)</li>
    <li>Use prop drilling or context to pass additional shared state</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/compound') ?>" class="hover:underline">← Previous: Compound Components</a>
  <a href="<?= base_url('react/hoc') ?>" class="hover:underline ms-auto">Next: HOC →</a>
</div>

</main>
