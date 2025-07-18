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
      <li class="text-black dark:text-gray-400">Handling Events</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🖱️ Handling Events in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React uses a slightly different approach to handling browser events. You can pass event handlers as props directly into elements using camelCase syntax.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Section: Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Basic Event Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function ClickButton() {
  function handleClick() {
    alert("Button was clicked!");
  }

  return &lt;button onClick={handleClick}&gt;Click Me&lt;/button&gt;;
}
</code></pre>

  <!-- Section: Inline Event -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚡ Inline Event Handler</h2>
  <p class="text-black dark:text-gray-300 mb-4">You can define the function directly inside the JSX:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
&lt;button onClick={() =&gt; alert("Clicked!")}&gt;Click&lt;/button&gt;
</code></pre>

  <!-- Section: Accessing Event Object -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📨 Accessing Event Object</h2>
  <p class="text-black dark:text-gray-300 mb-4">React automatically passes the event object to your handler:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function handleClick(event) {
  console.log(event.target);
}
</code></pre>

  <!-- Section: Prevent Default -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 Preventing Default Behavior</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function MyForm() {
  function handleSubmit(e) {
    e.preventDefault();
    alert("Form submitted!");
  }

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;button type="submit"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
  );
}
</code></pre>

  <!-- Section: Event Binding Note -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 No Need for Binding</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    In modern React (with function components), you don’t need to bind <code>this</code> like in class components. Arrow functions preserve scope naturally.
  </p>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use named functions for better readability and debugging.</li>
    <li>Avoid inline functions if performance is a concern (e.g. large lists).</li>
    <li>Use <code>preventDefault()</code> for forms or anchor tags when needed.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>onClick</code>, <code>onChange</code>, <code>onSubmit</code>, etc. with camelCase syntax.</li>
    <li>Arrow functions keep <code>this</code> binding clean.</li>
    <li>React normalizes events across browsers.</li>
  </ul>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/empty-states') ?>" class="hover:underline">← Previous: Conditional Lists & Empty States</a>
  <a href="<?= base_url('react/controlled-vs-uncontrolled') ?>" class="hover:underline">Next: Controlled vs Uncontrolled →</a>
</div>


</main>
