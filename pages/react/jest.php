<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/testing-intro" class="text-blue-600 hover:underline dark:text-blue-400">Testing</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Jest</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧪 Introduction to Jest</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Jest</strong> is a popular JavaScript testing framework developed by Meta. It’s used for unit testing and works seamlessly with React, offering powerful features like mocking, snapshot testing, and easy configuration.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Install -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 1. Installation</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    If you're using Create React App (CRA), Jest is pre-installed. Otherwise, install manually:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npm install --save-dev jest babel-jest @testing-library/react @testing-library/jest-dom
</code></pre>

  <!-- Basic Test -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 2. Writing a Basic Test</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    Create a file like <code>sum.test.js</code>:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// sum.js
export function sum(a, b) {
  return a + b;
}

// sum.test.js
import { sum } from './sum';

test('adds 2 + 3 to equal 5', () => {
  expect(sum(2, 3)).toBe(5);
});
</code></pre>

  <!-- Run Tests -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 3. Running Tests</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Run the tests using the following command:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npx jest
</code></pre>

  <!-- Matchers -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 4. Common Matchers</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>toBe(value)</code>: Exact match</li>
    <li><code>toEqual(object)</code>: Deep equality</li>
    <li><code>toContain(item)</code>: Array includes item</li>
    <li><code>toHaveLength(n)</code>: Array or string length</li>
    <li><code>toThrow()</code>: Expect a function to throw error</li>
  </ul>

  <!-- Snapshot -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📸 5. Snapshot Testing</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    Automatically track component UI output:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { render } from '@testing-library/react';
import MyComponent from './MyComponent';

test('renders correctly', () => {
  const { asFragment } = render(&lt;MyComponent /&gt;);
  expect(asFragment()).toMatchSnapshot();
});
</code></pre>

  <!-- Mocking -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎭 6. Mocking with Jest</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Jest lets you mock functions, modules, and timers. Example:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const mockFn = jest.fn();
mockFn('hello');
expect(mockFn).toHaveBeenCalledWith('hello');
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Jest is fast, powerful, and widely used in the React ecosystem.</li>
    <li>Supports unit, integration, and snapshot testing.</li>
    <li>Works great with React Testing Library.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/testing-intro') ?>" class="hover:underline">← Previous: Why Testing?</a>
  <a href="<?= base_url('react/testing-library') ?>" class="hover:underline">Next: React Testing Library →</a>
</div>


</main>
