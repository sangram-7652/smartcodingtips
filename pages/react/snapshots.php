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
      <li class="flex items-center">Snapshot Testing</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📸 Snapshot Testing in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Snapshot testing is a technique to verify that a component’s output hasn’t changed unexpectedly. It captures a serialized version of your component's rendered output and stores it for future comparison.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- What Is -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 1. What Is Snapshot Testing?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Automatically saves a "snapshot" of the rendered component</li>
    <li>Compares future renders against that snapshot</li>
    <li>Helps detect unintended changes in UI</li>
  </ul>

  <!-- Setup -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Setup Requirements</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You'll need <code>jest</code> and <code>@testing-library/react</code>. With Create React App, it’s already configured.
  </p>

  <!-- Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Basic Snapshot Example</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Button.js
export default function Button() {
  return &lt;button&gt;Click me&lt;/button&gt;;
}

// Button.test.js
import { render } from '@testing-library/react';
import Button from './Button';

test('renders correctly', () =&gt; {
  const { asFragment } = render(&lt;Button /&gt;);
  expect(asFragment()).toMatchSnapshot();
});
</code></pre>

  <!-- Result -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📁 4. What Gets Stored?</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    The test will generate a file in the <code>__snapshots__</code> directory with the component’s HTML structure.
  </p>

  <!-- Updating -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">♻️ 5. Updating Snapshots</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    If your component’s UI has intentionally changed, update the snapshot with:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npm test -- -u
</code></pre>

  <!-- When to Use -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 6. When Should You Use Snapshot Testing?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Static and presentational components</li>
    <li>Quick regressions in markup changes</li>
    <li>Reusable components like buttons, cards, icons</li>
  </ul>

  <!-- Caution -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚠️ 7. Limitations & Cautions</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Snapshots can become noisy and hard to manage</li>
    <li>Overuse can make tests brittle and meaningless</li>
    <li>Best when paired with behavior-based tests</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Snapshot testing helps catch unexpected UI changes</li>
    <li>Use sparingly for UI components that change rarely</li>
    <li>Run <code>--updateSnapshot</code> to sync snapshots with intended changes</li>
  </ul>

  <!-- Next Page Navigation -->
<div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/testing-library') ?>" class="hover:underline">← Previous: React Testing Library</a>
  <a href="<?= base_url('react/test-interactions') ?>" class="hover:underline">Next: User Interaction Testing →</a>
</div>

</main>
