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
      <li class="flex items-center">Compound Components</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔗 Compound Components Pattern</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Compound Components</strong> is a design pattern where components work together to share state and behavior, making them more expressive and flexible for users of your component library.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Intro -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎛️ 1. What Are Compound Components?</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Compound components allow multiple subcomponents to implicitly share state and logic through context, giving developers a flexible and declarative API.
  </p>

  <!-- Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 2. Example: Toggle Component</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import React, { createContext, useContext, useState } from 'react';

const ToggleContext = createContext();

function Toggle({ children }) {
  const [on, setOn] = useState(false);
  const toggle = () => setOn(!on);

  return (
    &lt;ToggleContext.Provider value={{ on, toggle }}&gt;
      {children}
    &lt;/ToggleContext.Provider&gt;
  );
}

Toggle.On = function On({ children }) {
  const { on } = useContext(ToggleContext);
  return on ? children : null;
};

Toggle.Off = function Off({ children }) {
  const { on } = useContext(ToggleContext);
  return !on ? children : null;
};

Toggle.Button = function Button() {
  const { toggle } = useContext(ToggleContext);
  return (
    &lt;button onClick={toggle} className="bg-indigo-600 text-white px-4 py-2 rounded"&gt;
      Toggle
    &lt;/button&gt;
  );
};
</code></pre>

  <!-- Usage -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 3. Usage Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
function App() {
  return (
    &lt;Toggle&gt;
      &lt;Toggle.On&gt;The toggle is ON&lt;/Toggle.On&gt;
      &lt;Toggle.Off&gt;The toggle is OFF&lt;/Toggle.Off&gt;
      &lt;Toggle.Button /&gt;
    &lt;/Toggle&gt;
  );
}
</code></pre>

  <!-- Benefits -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. Why Use Compound Components?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Cleaner and expressive usage syntax</li>
    <li>State sharing across deeply nested components</li>
    <li>Decouples layout and behavior</li>
    <li>Great for design systems</li>
  </ul>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 5. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use React Context internally</li>
    <li>Keep API intuitive and declarative</li>
    <li>Expose clear subcomponents (e.g., <code>Toggle.Button</code>, <code>Toggle.On</code>)</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/render-props" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Render Props →
    </a>
  </div>

</main>
