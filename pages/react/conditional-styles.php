<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/styling" class="text-blue-600 hover:underline dark:text-blue-400">Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Conditional Styling</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🎯 Conditional Styling in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Conditional styling allows you to apply styles based on dynamic values like props, state, or context. This is essential for building responsive, interactive UIs.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Section 1: Inline Conditional Styling -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 1. Inline Styling with Ternary</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
function Button({ isActive }) {
  return (
    &lt;button
      style={{
        backgroundColor: isActive ? '#22c55e' : '#ef4444',
        color: 'white',
        padding: '10px 16px',
      }}
    &gt;
      {isActive ? 'Active' : 'Inactive'}
    &lt;/button&gt;
  );
}
</code></pre>

  <!-- Section 2: Class-based Conditional (Tailwind / CSS Modules) -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎨 2. Class-based Styling</h2>
  <p class="mb-2 text-black dark:text-gray-300">Use ternary logic in the <code>className</code> attribute:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
function Card({ selected }) {
  return (
    &lt;div
      className={`p-4 rounded shadow ${
        selected ? 'bg-blue-600 text-white' : 'bg-gray-100 text-black'
      }`}
    &gt;
      Card Content
    &lt;/div&gt;
  );
}
</code></pre>

  <!-- Section 3: Conditional Styling with CSS Modules -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. CSS Modules</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// Card.module.css
.card {
  padding: 1rem;
  border-radius: 8px;
}
.selected {
  background-color: #0ea5e9;
  color: white;
}
</code></pre>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import styles from './Card.module.css';

function Card({ selected }) {
  return (
    &lt;div className={`${styles.card} ${selected ? styles.selected : ''}`}&gt;
      CSS Modules Example
    &lt;/div&gt;
  );
}
</code></pre>

  <!-- Section 4: Conditional Styling in Styled Components -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💅 4. Styled Components</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import styled from 'styled-components';

const Box = styled.div`
  background-color: ${(props) => (props.active ? '#4ade80' : '#f87171')};
  color: white;
  padding: 16px;
  border-radius: 8px;
`;

function StatusBox({ active }) {
  return &lt;Box active={active}&gt;Status&lt;/Box&gt;;
}
</code></pre>

  <!-- Section 5: Libraries like clsx -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 5. Using clsx / classnames</h2>
  <p class="mb-2 text-black dark:text-gray-300">To cleanly manage conditional classes:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import clsx from 'clsx';

function Button({ primary }) {
  return (
    &lt;button
      className={clsx('px-4 py-2 rounded', {
        'bg-blue-600 text-white': primary,
        'bg-gray-300 text-black': !primary,
      })}
    &gt;
      Submit
    &lt;/button&gt;
  );
}
</code></pre>

  <!-- Section 6: Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use ternary operators for simple inline or class-based conditions</li>
    <li>Use <code>clsx</code> or <code>classnames</code> for complex logic</li>
    <li>Styled Components and Emotion support props for dynamic styling</li>
    <li>CSS Modules also support scoped + conditional class merging</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/responsive-design" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Responsive Design →
    </a>
  </div>

</main>
