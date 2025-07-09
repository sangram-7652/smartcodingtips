<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/testing-jest" class="text-blue-600 hover:underline">Testing with Jest</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🧪 Testing JavaScript with Jest</h1>

  <p class="mb-4">
    <strong>Jest</strong> is a modern testing framework by Facebook that's great for testing JavaScript applications. It supports assertions, mocking, snapshot testing, and more.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📦 Step 1: Install Jest</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code># Initialize project
npm init -y

# Install Jest
npm install --save-dev jest</code></pre>

  <p class="mb-4">
    Add this to your <code>package.json</code> to run tests using the <code>npm test</code> command:
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>"scripts": {
  "test": "jest"
}</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧮 Step 2: Write a Function to Test</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// math.js
function add(a, b) {
  return a + b;
}
module.exports = add;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Step 3: Create a Test File</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// math.test.js
const add = require('./math');

test('adds 2 + 3 to equal 5', () => {
  expect(add(2, 3)).toBe(5);
});</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚀 Step 4: Run the Tests</h2>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>npm test</code></pre>
  <p class="mb-4">You’ll see a green success message if everything is correct ✅</p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 Common Matchers</h2>
  <ul class="list-disc list-inside mb-4">
    <li><code>.toBe(value)</code> – Exact match</li>
    <li><code>.toEqual(object)</code> – For objects/arrays</li>
    <li><code>.toContain(item)</code> – Check if array includes value</li>
    <li><code>.toBeTruthy()</code>, <code>.toBeFalsy()</code> – Booleans</li>
    <li><code>.toThrow()</code> – Expect error to be thrown</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧠 Mocking Example</h2>
  <p class="mb-2">Simulate a function’s behavior without calling the real implementation:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const fetchData = jest.fn(() => 'mocked data');
test('fetchData returns mocked data', () => {
  expect(fetchData()).toBe('mocked data');
});</code></pre>

  <div class="bg-green-100 border-l-4 border-green-500 text-green-900 p-4 rounded mt-6">
    ✅ <strong>Pro Tip:</strong> Place tests in a <code>__tests__</code> folder or name them <code>*.test.js</code> for automatic discovery.
  </div>

</main>
