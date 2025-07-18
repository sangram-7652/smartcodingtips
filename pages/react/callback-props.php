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
      <li class="flex items-center">Callback Props</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔁 Callback Props</h1>

  <p class="mb-6 text-black dark:text-white">
    <strong>Callback props</strong> are functions passed from a parent component to a child. They let the child notify the parent when something happens — like a button click or input change.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📥 Why Use Callback Props?</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Enable child-to-parent communication</li>
    <li>Keep the state and logic in the parent, while the child handles UI</li>
    <li>Maintain unidirectional data flow</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Example</h2>
  <p class="text-black dark:text-white mb-4">Here's how a child component sends data back to the parent using a callback function:</p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-black dark:text-white mb-6"><code>// Parent Component
function Parent() {
  const handleMessage = (msg) => {
    alert("Child says: " + msg);
  };

  return &lt;Child onSend={handleMessage} /&gt;;
}

// Child Component
function Child({ onSend }) {
  return (
    &lt;button onClick={() =&gt; onSend("Hello from child!")}&gt;
      Send Message
    &lt;/button&gt;
  );
}
</code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 Tip</h2>
  <p class="text-black dark:text-white mb-4">
    You can also use callback props to update parent state based on input from children — commonly used in forms, modals, and custom inputs.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Callback props are functions passed to children</li>
    <li>Used for triggering actions in the parent</li>
    <li>Great for keeping logic centralized</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/lifting-state') ?>" class="hover:underline">← Previous: Lifting State Up</a>
  <a href="<?= base_url('react/sharing-data') ?>" class="hover:underline">Next: Sharing Between Components →</a>
</div>

</main>
