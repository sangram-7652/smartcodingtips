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
      <li class="flex items-center">User Interaction Testing</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🖱️ User Interaction Testing in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Testing how users interact with your components — like clicking buttons, typing in forms, or submitting data — is essential to ensure your app behaves correctly in real-world usage.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Why -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎯 1. Why Test User Interactions?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Verify UI updates correctly on user actions</li>
    <li>Ensure form validation and submission logic works</li>
    <li>Prevent regressions in core UI functionality</li>
  </ul>

  <!-- fireEvent vs userEvent -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. fireEvent vs userEvent</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>fireEvent</code>: Simulates DOM events (basic, low-level)</li>
    <li><code>userEvent</code>: Simulates real user behavior (recommended)</li>
  </ul>

  <!-- Basic Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Example: Button Click</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Counter.js
export default function Counter() {
  const [count, setCount] = React.useState(0);
  return (
    &lt;div&gt;
      &lt;p&gt;Count: {count}&lt;/p&gt;
      &lt;button onClick={() =&gt; setCount(count + 1)}&gt;Increment&lt;/button&gt;
    &lt;/div&gt;
  );
}

// Counter.test.js
import { render, screen } from '@testing-library/react';
import userEvent from '@testing-library/user-event';
import Counter from './Counter';

test('increments count on click', async () =&gt; {
  render(&lt;Counter /&gt;);
  const button = screen.getByText('Increment');
  await userEvent.click(button);
  expect(screen.getByText('Count: 1')).toBeInTheDocument();
});
</code></pre>

  <!-- Typing into Input -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⌨️ 4. Example: Typing in Input</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Greeting.js
export default function Greeting() {
  const [name, setName] = React.useState('');
  return (
    &lt;div&gt;
      &lt;input
        placeholder="Enter name"
        onChange={(e) =&gt; setName(e.target.value)}
      /&gt;
      &lt;p&gt;Hello {name}&lt;/p&gt;
    &lt;/div&gt;
  );
}

// Greeting.test.js
import { render, screen } from '@testing-library/react';
import userEvent from '@testing-library/user-event';
import Greeting from './Greeting';

test('updates name on typing', async () =&gt; {
  render(&lt;Greeting /&gt;);
  const input = screen.getByPlaceholderText('Enter name');
  await userEvent.type(input, 'React');
  expect(screen.getByText('Hello React')).toBeInTheDocument();
});
</code></pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>userEvent</code> for more realistic simulations</li>
    <li>Query elements the way users would (e.g., by role, label)</li>
    <li>Wrap async interactions in <code>await</code></li>
    <li>Check visible text and screen updates, not internal state</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>User interaction tests help you verify dynamic behaviors</li>
    <li><code>userEvent</code> is better than <code>fireEvent</code> for simulating real usage</li>
    <li>Test inputs, clicks, form submission, and validation thoroughly</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/snapshots') ?>" class="hover:underline">← Previous: Snapshot Testing</a>
  <a href="<?= base_url('react/xss-protection') ?>" class="hover:underline">Next: XSS Protection →</a>
</div>

</main>
