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
      <li class="flex items-center">Accessibility</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">♿ Accessibility in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Accessibility (a11y) ensures that your app is usable by people with disabilities, using screen readers, keyboard navigation, or assistive technologies. Here's how to build accessible React apps.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Semantic HTML -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔤 1. Use Semantic HTML</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use proper tags: <code>&lt;header&gt;, &lt;nav&gt;, &lt;main&gt;, &lt;footer&gt;</code></li>
    <li>Use headings <code>(h1–h6)</code> in logical order</li>
    <li>Avoid using <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code> for interactive elements</li>
  </ul>

  <!-- ARIA -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 2. ARIA Roles and Labels</h2>
  <p class="text-black dark:text-gray-300 mb-2">Use ARIA attributes only when semantic HTML is not enough:</p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>aria-label</code> — custom labels for buttons, inputs</li>
    <li><code>aria-hidden</code> — hide elements from screen readers</li>
    <li><code>role="dialog"</code> — define modal dialogs</li>
  </ul>

  <!-- Keyboard Navigation -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⌨️ 3. Keyboard Navigation</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Ensure all buttons, links, and forms are focusable</li>
    <li>Use <code>tabIndex</code> to manage focus order when needed</li>
    <li>Handle <code>onKeyDown</code> for interactive custom elements</li>
  </ul>

  <!-- Forms -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📝 4. Accessible Forms</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Always link <code>&lt;label&gt;</code> to its input using <code>htmlFor</code></li>
    <li>Use <code>aria-describedby</code> for help or error messages</li>
    <li>Ensure proper keyboard and screen reader flow</li>
  </ul>

  <!-- Images -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🖼️ 5. Accessible Images</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use descriptive <code>alt</code> text</li>
    <li>Use <code>role="presentation"</code> or <code>alt=""</code> for decorative images</li>
  </ul>

  <!-- Tools -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧰 6. Tools for Testing Accessibility</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><a href="https://wave.webaim.org" target="_blank" class="underline text-blue-600 dark:text-blue-400">WAVE</a> – Web accessibility evaluation tool</li>
    <li><a href="https://www.deque.com/axe/" target="_blank" class="underline text-blue-600 dark:text-blue-400">axe DevTools</a> – Chrome extension by Deque</li>
    <li><code>@testing-library/jest-dom</code> – Includes a11y matchers for testing</li>
  </ul>

  <!-- Bonus -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 7. Bonus Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use motion responsibly (add <code>prefers-reduced-motion</code>)</li>
    <li>Test using screen readers like NVDA, VoiceOver</li>
    <li>Always test your UI with keyboard alone (Tab, Enter, Esc)</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/debugging" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Debugging Techniques →
    </a>
  </div>

</main>
