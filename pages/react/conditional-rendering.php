<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Conditional Rendering</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔀 Conditional Rendering in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Conditional rendering lets you display content based on certain conditions. React provides multiple ways to control what gets rendered based on logic or user interaction.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- if-else -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">1️⃣ Using <code>if-else</code> Statements</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    You can conditionally render different elements using plain JavaScript:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
function Greeting({ isLoggedIn }) {
  if (isLoggedIn) {
    return &lt;h2&gt;Welcome back!&lt;/h2&gt;;
  } else {
    return &lt;h2&gt;Please log in.&lt;/h2&gt;;
  }
}
</pre>

  <!-- Ternary Operator -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">2️⃣ Using Ternary Operator</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
function Greeting({ isLoggedIn }) {
  return (
    &lt;h2&gt;
      {isLoggedIn ? "Welcome back!" : "Please log in."}
    &lt;/h2&gt;
  );
}
</pre>

  <!-- && Operator -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">3️⃣ Using Logical AND (<code>&&</code>)</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
function Warning({ show }) {
  return (
    &lt;div&gt;
      {show && &lt;p&gt;⚠️ This is a warning!&lt;/p&gt;}
    &lt;/div&gt;
  );
}
</pre>

  <!-- Extracting JSX Logic -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">4️⃣ Separating JSX Logic</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto">
function Message({ status }) {
  let content;
  if (status === "loading") {
    content = &lt;p&gt;Loading...&lt;/p&gt;;
  } else if (status === "error") {
    content = &lt;p&gt;❌ Something went wrong.&lt;/p&gt;;
  } else {
    content = &lt;p&gt;✅ Success!&lt;/p&gt;;
  }

  return &lt;div&gt;{content}&lt;/div&gt;;
}
</pre>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>&&</code> for simple checks (e.g., toggle content visibility).</li>
    <li>Use ternary for small inline conditional UI.</li>
    <li>Use <code>if</code> or extracted functions for complex logic.</li>
  </ul>

  <!-- Next Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/lists" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: List Rendering →
    </a>
  </div>
</main>
