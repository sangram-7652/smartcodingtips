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
      <li class="flex items-center">React Testing Library</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧪 React Testing Library (RTL)</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>React Testing Library</strong> (RTL) is a lightweight testing library for React. It focuses on testing components from the user’s perspective rather than testing implementation details.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why RTL -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎯 1. Why Use RTL?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Encourages testing UI behavior, not structure</li>
    <li>Promotes good accessibility by using roles and labels</li>
    <li>Works perfectly with Jest</li>
  </ul>

  <!-- Installation -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Installation</h2>
  <p class="text-black dark:text-gray-300 mb-4">If you're using Create React App, it's already included. Otherwise:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npm install --save-dev @testing-library/react @testing-library/jest-dom
</code></pre>

  <!-- Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Basic Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Hello.js
export default function Hello() {
  return &lt;h1&gt;Hello, World!&lt;/h1&gt;;
}

// Hello.test.js
import { render, screen } from '@testing-library/react';
import Hello from './Hello';

test('renders hello message', () =&gt; {
  render(&lt;Hello /&gt;);
  expect(screen.getByText('Hello, World!')).toBeInTheDocument();
});
</code></pre>

  <!-- Query Types -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 4. Common Query Methods</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>getByText()</code> – find by visible text</li>
    <li><code>getByRole()</code> – find by accessibility role</li>
    <li><code>getByLabelText()</code> – useful for forms</li>
    <li><code>findBy</code> – async queries for elements that appear later</li>
  </ul>

  <!-- Event Testing -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🖱️ 5. Simulating Events</h2>
  <p class="text-black dark:text-gray-300 mb-4">Use <code>fireEvent</code> or <code>userEvent</code> to simulate interactions.</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { render, screen, fireEvent } from '@testing-library/react';
import Counter from './Counter';

test('increments counter', () =&gt; {
  render(&lt;Counter /&gt;);
  const button = screen.getByText('Increment');
  fireEvent.click(button);
  expect(screen.getByText('Count: 1')).toBeInTheDocument();
});
</code></pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 6. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Test what the user sees, not internal state or classNames</li>
    <li>Use <code>screen</code> for consistency in queries</li>
    <li>Write tests that are resilient to UI refactoring</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>React Testing Library helps you test real user behavior</li>
    <li>Combines well with Jest and DOM matchers</li>
    <li>Encourages accessible, maintainable testing</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/testing-components" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Testing React Components →
    </a>
  </div>

</main>
