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
      <li class="text-black dark:text-gray-400">State</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧠 Understanding React State</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>State</strong> is a built-in object in React components used to store dynamic data that affects how a component renders and behaves. It’s the “brain” of interactive UI components.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- useState -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ What is <code>useState</code>?</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    In functional components, you use the <code>useState()</code> hook to declare state.
  </p>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">Example:</h3>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
import React, { useState } from 'react';

function Counter() {
  const [count, setCount] = useState(0);

  return (
    &lt;div&gt;
      &lt;p&gt;You clicked {count} times&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Click me&lt;/button&gt;
    &lt;/div&gt;
  );
}
</pre>

  <p class="text-black dark:text-gray-300 mb-6">
    Here, <code>count</code> is a state variable. <code>setCount</code> is the function used to update it.
  </p>

  <!-- Rules -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Rules of Using State</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>You must import <code>useState</code> from <code>react</code>.</li>
    <li><code>useState</code> returns an array: [value, setter]</li>
    <li>You cannot directly modify the state (use the setter function).</li>
    <li>Setting state re-renders the component.</li>
  </ul>

  <!-- Multiple State Variables -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 Multiple State Variables</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function Profile() {
  const [name, setName] = useState("Sangram");
  const [age, setAge] = useState(25);

  return &lt;p&gt;{name} is {age} years old&lt;/p&gt;;
}
</pre>

  <p class="text-black dark:text-gray-300 mb-6">
    You can use multiple <code>useState</code> hooks for different pieces of state.
  </p>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Initialize state with a sensible default.</li>
    <li>Use one state per concern instead of nesting complex objects.</li>
    <li>Keep derived values outside of state.</li>
    <li>Update state immutably (e.g., don’t directly mutate arrays/objects).</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/events" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: Events in React →
    </a>
  </div>

</main>
