<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/best-practices" class="text-blue-600 hover:underline dark:text-blue-400">Best Practices</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Reusability</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">♻️ Reusability Principles in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Reusability is a core principle of React that encourages breaking your UI into smaller, manageable, and reusable components to reduce duplication and increase maintainability.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Principle 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔁 1. DRY – Don’t Repeat Yourself</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Avoid duplicating UI logic across components</li>
    <li>Extract repeated JSX into reusable components or hooks</li>
    <li>Use shared utility functions for repeated business logic</li>
  </ul>

  <!-- Principle 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Component Abstraction</h2>
  <p class="mb-2 text-black dark:text-gray-300">Break UI into smaller, self-contained components:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// Reusable Button component
function Button({ children, onClick }) {
  return (
    &lt;button onClick={onClick} className="bg-blue-600 text-white px-4 py-2 rounded"&gt;
      {children}
    &lt;/button&gt;
  );
}
</code></pre>

  <!-- Principle 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎣 3. Reusable Hooks</h2>
  <p class="mb-2 text-black dark:text-gray-300">Encapsulate logic in custom hooks to avoid repetition:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useState, useEffect } from 'react';

function useFetch(url) {
  const [data, setData] = useState(null);

  useEffect(() => {
    fetch(url).then(res => res.json()).then(setData);
  }, [url]);

  return data;
}
</code></pre>

  <!-- Principle 4 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎛️ 4. Props for Configurability</h2>
  <p class="mb-2 text-black dark:text-gray-300">Design components to accept props for flexible reuse:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
function Alert({ type, message }) {
  const bg = type === 'error' ? 'bg-red-500' : 'bg-green-500';
  return &lt;div className={`text-white p-3 rounded ${bg}`}&gt;{message}&lt;/div&gt;;
}
</code></pre>

  <!-- Principle 5 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 5. Composition Over Inheritance</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    React encourages composing components with children instead of extending them.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function Card({ children }) {
  return &lt;div className="shadow p-4 rounded"&gt;{children}&lt;/div&gt;;
}
</code></pre>

  <!-- Principle 6 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📚 6. Organize Code by Feature</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Keep related components, hooks, and styles together</li>
    <li>Helps isolate concerns and maximize reuse</li>
  </ul>

  <!-- Principle 7 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Break down UI into small, testable units</li>
    <li>Design generic, prop-driven components</li>
    <li>Extract repeated logic into hooks</li>
    <li>Favor composition over complexity</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/performance-optimization" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Performance Optimization →
    </a>
  </div>

</main>
