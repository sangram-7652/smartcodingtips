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
      <li class="flex items-center">Why Testing?</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧪 Why Test Your React Applications?</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Testing is a crucial part of modern development. It helps you ensure that your application behaves as expected, prevents bugs from reappearing, and gives confidence to ship features quickly and safely.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Benefits -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 1. Benefits of Testing</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Confidence</strong>: Know your changes won’t break existing code.</li>
    <li><strong>Refactoring safely</strong>: Update or rewrite components without fear.</li>
    <li><strong>Documentation</strong>: Tests describe expected behavior for developers.</li>
    <li><strong>Automation</strong>: Detect regressions early in CI/CD pipelines.</li>
  </ul>

  <!-- Types of Testing -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 2. Types of Testing</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Unit Testing</strong>: Test individual functions/components in isolation.</li>
    <li><strong>Integration Testing</strong>: Ensure different units work together.</li>
    <li><strong>End-to-End (E2E)</strong>: Simulate real user flows (e.g. Cypress).</li>
  </ul>

  <!-- What Should Be Tested -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 3. What Should You Test?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Pure functions and logic</li>
    <li>UI behavior (e.g. button click updates state)</li>
    <li>Form submission & validation</li>
    <li>Routing & navigation logic</li>
    <li>Network request handling</li>
  </ul>

  <!-- Tools -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛠️ 4. Common Tools</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>Jest</strong>: JavaScript testing framework</li>
    <li><strong>React Testing Library</strong>: Encourages testing from the user’s perspective</li>
    <li><strong>Cypress</strong>: E2E browser-based testing</li>
    <li><strong>Vitest</strong>: Fast unit testing with Vite support</li>
  </ul>

  <!-- Myths -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚫 5. Common Misconceptions</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>"It slows me down"</strong> — Tests save time by catching bugs early.</li>
    <li><strong>"Only big projects need testing"</strong> — Even small apps benefit.</li>
    <li><strong>"It’s hard to write"</strong> — With tools like RTL, tests become intuitive.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Testing improves code quality, confidence, and collaboration.</li>
    <li>Use the right tool for the right kind of test.</li>
    <li>Focus on testing behavior, not implementation.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/performance-tips') ?>" class="hover:underline">← Previous: Performance Tips</a>
  <a href="<?= base_url('react/jest') ?>" class="hover:underline">Next: Jest →</a>
</div>

</main>
