<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/naming-conventions" class="text-blue-600 dark:text-blue-400 hover:underline">Best Practices</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Naming Conventions</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🧾 JavaScript Naming Conventions</h1>

  <p class="mb-4">
    Naming conventions are essential for writing clean, readable, and maintainable code. In JavaScript, there are a few commonly accepted styles for variables, functions, classes, and constants.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🧠 General Rules</h2>
  <ul class="list-disc list-inside mb-6">
    <li>Be descriptive and consistent</li>
    <li>Avoid short or vague names like <code>x</code>, <code>data</code>, <code>temp</code></li>
    <li>Use camelCase for most identifiers</li>
    <li>Start variables and functions with a lowercase letter</li>
    <li>Use PascalCase for classes and constructors</li>
    <li>Use UPPERCASE_SNAKE_CASE for constants</li>
  </ul>

  <hr class="my-6">

  <h2 class="text-xl font-semibold mb-4">📦 Variables and Functions – <code>camelCase</code></h2>

  <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>// ✅ Recommended
let userName = "John";
const maxItems = 10;

function getUserData() {
  // ...
}</code></pre>

  <p class="mb-6">Use <strong>camelCase</strong> where the first word is lowercase and subsequent words are capitalized.</p>

  <hr class="my-6">

  <h2 class="text-xl font-semibold mb-4">🏗️ Classes and Constructors – <code>PascalCase</code></h2>

  <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>// ✅ Recommended
class UserProfile {
  constructor(name) {
    this.name = name;
  }
}</code></pre>

  <p class="mb-6">Use <strong>PascalCase</strong> (capitalized words) for class names and constructor functions.</p>

  <hr class="my-6">

  <h2 class="text-xl font-semibold mb-4">🔒 Constants – <code>UPPER_SNAKE_CASE</code></h2>

  <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white text-sm mb-4"><code>// ✅ Recommended
const MAX_RETRIES = 3;
const API_KEY = "abcd1234";</code></pre>

  <p class="mb-6">Use <strong>UPPERCASE with underscores</strong> for constants that shouldn’t change during runtime.</p>

  <hr class="my-6">

  <h2 class="text-xl font-semibold mb-4">❌ Avoid These Common Mistakes</h2>

  <ul class="list-disc list-inside mb-6 text-red-700">
    <li>Don’t use ambiguous names like <code>stuff</code>, <code>thing</code>, or <code>obj1</code></li>
    <li>Don’t mix naming styles (e.g., <code>Pascal_case</code>, <code>snakeCase</code>)</li>
    <li>Don’t use misleading or unrelated names</li>
  </ul>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">✅ Best Practices Summary</h2>
  <ul class="list-disc list-inside mb-4">
    <li><strong>camelCase</strong> – variables and functions</li>
    <li><strong>PascalCase</strong> – classes and constructors</li>
    <li><strong>UPPER_SNAKE_CASE</strong> – constants</li>
    <li><strong>Names should describe purpose</strong> clearly</li>
  </ul>

  <p class="mt-4">By following naming conventions, your JavaScript will be cleaner and easier to maintain, especially in team environments.</p>

 <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/dry-kiss') ?>" class="hover:underline">← Previous: DRY & KISS</a>
    <a href="<?= base_url('js/performance') ?>" class="hover:underline ms-auto">Next: Performance Tips →</a>
</div>
</main>

