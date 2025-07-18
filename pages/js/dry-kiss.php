<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/dry-kiss" class="text-blue-600 hover:underline">Principles</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">💡 DRY & KISS Principles in JavaScript</h1>

  <p class="mb-4">
    When writing code, it's important to keep it clean, simple, and maintainable. Two core software design principles that help with this are <strong>DRY</strong> and <strong>KISS</strong>.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🔁 DRY – Don’t Repeat Yourself</h2>
  <p class="mb-4">
    <strong>DRY</strong> means avoiding repetition in your code. Repeating the same logic or structure in multiple places increases the chances of bugs and makes code harder to maintain.
  </p>

  <h3 class="text-lg font-semibold mb-2">💥 Bad Example:</h3>
  <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>let area1 = 10 * 5;
let area2 = 20 * 5;
let area3 = 30 * 5;
// Repeating the same formula</code></pre>

  <h3 class="text-lg font-semibold mb-2">✅ DRY Version:</h3>
  <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function calculateArea(length, width) {
  return length * width;
}

let area1 = calculateArea(10, 5);
let area2 = calculateArea(20, 5);
let area3 = calculateArea(30, 5);</code></pre>

  <div class="bg-green-100 border-l-4 border-green-600 text-green-800 p-4 rounded mb-6">
    ✅ <strong>Tip:</strong> If you're copy-pasting code, it's a good sign you should refactor it.
  </div>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mb-4">🧠 KISS – Keep It Simple, Stupid</h2>
  <p class="mb-4">
    <strong>KISS</strong> encourages you to keep your code simple and easy to understand. Avoid over-engineering and writing overly complex logic when a simpler alternative exists.
  </p>

  <h3 class="text-lg font-semibold mb-2">💥 Bad Example:</h3>
  <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>function isEven(num) {
  if (num % 2 === 0) {
    return true;
  } else {
    return false;
  }
}</code></pre>

  <h3 class="text-lg font-semibold mb-2">✅ KISS Version:</h3>
  <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm mb-4"><code>const isEven = num => num % 2 === 0;</code></pre>

  <div class="bg-yellow-100 border-l-4 border-yellow-600 text-yellow-800 p-4 rounded mb-6">
    🧹 <strong>Tip:</strong> Simple code is easier to debug, test, and collaborate on with teammates.
  </div>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Final Thoughts</h2>
  <ul class="list-disc list-inside mb-4">
    <li>DRY helps reduce bugs and future-proof your logic</li>
    <li>KISS makes your code easier to understand and maintain</li>
    <li>Together, they improve code readability and quality</li>
  </ul>

  <p class="mt-4">
    Stick to these principles in every project — they’re simple, but powerful habits that separate clean code from messy chaos.
  </p>

  <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/naming" class="text-blue-600 hover:underline">Naming Conventions →</a></p>
</div>
</main>
