<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state" class="text-blue-600 hover:underline">State</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Callback Props</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black">🔁 Callback Props</h1>

  <p class="mb-6 text-black">
    <strong>Callback props</strong> are functions passed from a parent component to a child. They let the child notify the parent when something happens — like a button click or input change.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📥 Why Use Callback Props?</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>Enable child-to-parent communication</li>
    <li>Keep the state and logic in the parent, while the child handles UI</li>
    <li>Maintain unidirectional data flow</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">🧠 Example</h2>
  <p class="text-black mb-4">Here's how a child component sends data back to the parent using a callback function:</p>

  <pre class="bg-gray-100 p-4 rounded text-sm overflow-x-auto text-black mb-6"><code>// Parent Component
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

  <h2 class="text-2xl font-semibold mb-4 text-black">💡 Tip</h2>
  <p class="text-black mb-4">
    You can also use callback props to update parent state based on input from children — commonly used in forms, modals, and custom inputs.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📋 Summary</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>Callback props are functions passed to children</li>
    <li>Used for triggering actions in the parent</li>
    <li>Great for keeping logic centralized</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/context-api" class="text-blue-600 hover:underline">
      Next: React Context API →
    </a>
  </div>

</main>
