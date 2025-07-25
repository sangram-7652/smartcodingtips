<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/styling" class="text-blue-600 hover:underline dark:text-blue-400">Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Tailwind CSS</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">💨 Using Tailwind CSS in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Tailwind CSS</strong> is a utility-first CSS framework that lets you build custom designs quickly and consistently by applying pre-defined utility classes directly in your markup.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 1. Installation (Vite Example)</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
</code></pre>

  <p class="mb-2 text-black dark:text-gray-300">Then configure <code>tailwind.config.js</code>:</p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// tailwind.config.js
content: ["./index.html", "./src/**/*.{js,jsx}"],
theme: {
  extend: {},
},
plugins: [],
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎨 2. Add Tailwind Directives</h2>
  <p class="mb-2 text-black dark:text-gray-300">In your <code>index.css</code> or <code>App.css</code>, include:</p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
@tailwind base;
@tailwind components;
@tailwind utilities;
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Example Usage</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
function Button() {
  return (
    &lt;button className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"&gt;
      Click Me
    &lt;/button&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌙 4. Enable Dark Mode</h2>
  <p class="mb-2 text-black dark:text-gray-300">In <code>tailwind.config.js</code>:</p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
darkMode: 'class',
</code></pre>
  <p class="text-black dark:text-gray-300 mb-6">
    Then toggle a <code>dark</code> class on the <code>&lt;html&gt;</code> or <code>&lt;body&gt;</code> element to switch themes.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 5. Why Tailwind?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>No need to name classes or write custom CSS</li>
    <li>Responsive design built-in</li>
    <li>Great developer experience</li>
    <li>Highly customizable via config</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/css-modules') ?>" class="hover:underline">← Previous: CSS Modules</a>
  <a href="<?= base_url('react/styled-components') ?>" class="hover:underline ms-auto">Next: Styled Components →</a>
</div>

</main>
