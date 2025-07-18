<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600  dark:text-blue-400 hover:underline dark:text-blue-400">Introduction</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center text-black dark:text-gray-400">What is React?</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚛️ What is React?</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>React</strong> is a popular JavaScript library created by Facebook for building fast, interactive user interfaces — especially single-page applications (SPAs). It’s known for being component-based, declarative, and fast thanks to its use of a virtual DOM.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 1. Component-Based Architecture</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    In React, the UI is built using components — small, reusable pieces of code that represent parts of a web page.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm mb-4 text-black dark:text-white overflow-x-auto"><code>// A simple React component
function Welcome() {
  return &lt;h1&gt;Hello, React!&lt;/h1&gt;;
}</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🖊️ 2. JSX - JavaScript XML</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    React uses JSX — a syntax that allows you to write HTML-like code in JavaScript.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm mb-4 text-black dark:text-white overflow-x-auto"><code>const greeting = &lt;h2&gt;Welcome back!&lt;/h2&gt;;</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚡ 3. Virtual DOM</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    React uses a virtual DOM to efficiently update only the parts of the actual DOM that changed, making apps fast and responsive.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm mb-4 text-black dark:text-white overflow-x-auto"><code>// React updates only what changes
setCount(count + 1);</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 4. One-Way Data Flow</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Data flows from parent to child components via props. This makes the app predictable and easier to debug.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm mb-4 text-black dark:text-white overflow-x-auto"><code>&lt;UserProfile name="Sangram" age={28} /&gt;</code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 5. Why Use React?</h2>
  <ul class="list-disc list-inside mb-4 text-black dark:text-gray-300">
    <li>Reusable component system</li>
    <li>Efficient rendering with virtual DOM</li>
    <li>Large ecosystem and community</li>
    <li>Backed by Facebook</li>
    <li>Cross-platform with React Native</li>
  </ul>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📚 6. Real-Life Use Case</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    You can build a blog, eCommerce site, admin panel, or mobile app with React. Components like &lt;Header /&gt;, &lt;Post /&gt;, and &lt;Footer /&gt; can be reused across multiple pages.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside mb-4 text-black dark:text-gray-300">
    <li>⚛️ React is a JS library for building UIs</li>
    <li>🔧 Uses components to organize UI</li>
    <li>🧠 JSX makes writing UI intuitive</li>
    <li>⚡ Virtual DOM for performance</li>
    <li>🔁 One-way data binding</li>
    <li>📱 Works with React Native for mobile apps</li>
  </ul>

  <p class="mt-4 text-black dark:text-gray-300">React is powerful, flexible, and widely used — a great choice for modern front-end development.</p>

  <!-- Next Page -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <span></span>
  <a href="<?= base_url('react/why-react') ?>" class="hover:underline">Next: Why Use React? →</a>
</div>

</main>