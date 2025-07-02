<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/testing-intro" class="text-blue-600 hover:underline">Intro to Testing</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🧪 Introduction to JavaScript Testing</h1>

  <p class="mb-4">
    Testing ensures your code works as expected, prevents bugs, and boosts confidence when refactoring or adding new features.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📌 Why Test Your Code?</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Detect bugs early</li>
    <li>Ensure consistent behavior</li>
    <li>Enable safe refactoring</li>
    <li>Document expected functionality</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Types of Tests</h2>
  <ul class="list-disc list-inside mb-4">
    <li><strong>Unit Tests</strong>: Test individual functions or modules</li>
    <li><strong>Integration Tests</strong>: Check how modules work together</li>
    <li><strong>End-to-End Tests</strong>: Simulate real user interaction (e.g., clicking buttons)</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Writing a Simple Unit Test</h2>
  <p class="mb-2">Let’s test a basic function:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 overflow-x-auto"><code>// math.js
function add(a, b) {
  return a + b;
}

// test
const result = add(2, 3);
console.assert(result === 5, 'Expected 2 + 3 to equal 5');</code></pre>

  <p class="mb-4">
    This test will only log an error if it fails. You can run it directly in the browser or Node.js console.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧰 Testing Frameworks</h2>
  <ul class="list-disc list-inside mb-4">
    <li><strong>Jest</strong> – Great for unit and integration testing</li>
    <li><strong>Mocha + Chai</strong> – Flexible and powerful</li>
    <li><strong>Vitest</strong> – Fast Jest-compatible runner (used with Vite)</li>
    <li><strong>Cypress</strong> – End-to-end testing for UIs</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📁 File Structure Example</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 overflow-x-auto"><code>project/
├── src/
│   └── math.js
├── tests/
│   └── math.test.js
</code></pre>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Start testing small helper functions, then expand to larger components as you gain confidence.
  </div>

</main>
