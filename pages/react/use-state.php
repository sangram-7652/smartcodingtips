<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">useState()</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔄 useState() Hook in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    The <code>useState</code> hook allows you to add state to functional components. It's one of the most used hooks in React.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Basic Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
import React, { useState } from 'react';

function Counter() {
  const [count, setCount] = useState(0);

  return (
    &lt;div&gt;
      &lt;p&gt;You clicked {count} times&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;
        Click Me
      &lt;/button&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    - <code>useState(0)</code> initializes the count at 0.<br>
    - <code>setCount</code> updates the state and triggers a re-render.
  </p>

  <!-- Multiple States -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Using Multiple States</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function Profile() {
  const [name, setName] = useState('');
  const [age, setAge] = useState(18);

  return (
    &lt;div&gt;
      &lt;input 
        placeholder="Name" 
        value={name} 
        onChange={(e) =&gt; setName(e.target.value)} 
      /&gt;
      &lt;input 
        type="number" 
        value={age} 
        onChange={(e) =&gt; setAge(e.target.value)} 
      /&gt;
      &lt;p&gt;{name} is {age} years old.&lt;/p&gt;
    &lt;/div&gt;
  );
}
</code></pre>

  <!-- State with Objects -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 Updating Objects in State</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
const [formData, setFormData] = useState({ username: "", email: "" });

const handleChange = (e) =&gt; {
  setFormData({
    ...formData,
    [e.target.name]: e.target.value
  });
};
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    When working with objects, use the spread operator to preserve existing state while updating one property.
  </p>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Each call to <code>useState</code> gives one piece of state.</li>
    <li>You can use any type: number, string, array, object, etc.</li>
    <li>State updates are asynchronous.</li>
    <li>Don’t mutate state directly (e.g. don’t do <code>state.count++</code>).</li>
  </ul>

  <!-- Next Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/useref" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: useRef Hook →
    </a>
  </div>

</main>
