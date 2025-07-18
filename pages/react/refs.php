<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/refs" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">useRef()</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📌 Refs with <code>useRef()</code> in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <code>useRef()</code> is a React Hook that lets you create a reference to a DOM element or a mutable variable that doesn’t cause re-renders when updated.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- DOM Access -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 Accessing DOM Elements</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    A common use case for <code>useRef</code> is to access a DOM element directly — like focusing an input.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
import React, { useRef } from "react";

function InputFocus() {
  const inputRef = useRef(null);

  const handleClick = () => {
    inputRef.current.focus();
  };

  return (
    &lt;&gt;
      &lt;input ref={inputRef} type="text" placeholder="Click the button to focus me" /&gt;
      &lt;button onClick={handleClick}&gt;Focus Input&lt;/button&gt;
    &lt;/&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Here, <code>inputRef.current</code> gives us direct access to the input DOM node.
  </p>

  <!-- Persistent Value Storage -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Storing Persistent Values</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    <code>useRef</code> can also store values across renders without triggering a re-render.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function RenderCounter() {
  const count = useRef(0);

  React.useEffect(() => {
    count.current += 1;
    console.log("Render count:", count.current);
  });

  return &lt;p&gt;Check console for render count&lt;/p&gt;;
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Since <code>useRef</code> does not re-render the component, it's perfect for keeping track of values like timers or render counts.
  </p>

  <!-- Comparison -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 useRef vs useState</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li><code>useState</code> updates trigger re-renders.</li>
    <li><code>useRef</code> updates do not cause re-renders.</li>
    <li>Use <code>useRef</code> when you need to persist values or access DOM nodes.</li>
  </ul>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/submissions') ?>" class="hover:underline">← Previous: Handling Submissions</a>
  <a href="<?= base_url('react/use-state') ?>" class="hover:underline">Next: useState() →</a>
</div>

</main>
