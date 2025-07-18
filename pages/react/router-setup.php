<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/routing" class="text-blue-600 hover:underline dark:text-blue-400">Routing</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Setup react-router-dom</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔌 Setting Up <code>react-router-dom</code></h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <code>react-router-dom</code> enables client-side routing in your React application. It lets you navigate between components without reloading the entire page.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Installation</h2>
  <p class="mb-2 text-black dark:text-gray-300">Run this command in your project folder:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-4"><code>
npm install react-router-dom
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 2. Basic Setup in <code>App.jsx</code></h2>
  <p class="mb-2 text-black dark:text-gray-300">Wrap your app with <code>BrowserRouter</code> and define your routes:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-4"><code>
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './pages/Home';
import About from './pages/About';

function App() {
  return (
    &lt;BrowserRouter&gt;
      &lt;Routes&gt;
        &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
        &lt;Route path="/about" element={&lt;About /&gt;} /&gt;
      &lt;/Routes&gt;
    &lt;/BrowserRouter&gt;
  );
}

export default App;
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 3. Navigation with Links</h2>
  <p class="mb-2 text-black dark:text-gray-300">Use <code>&lt;Link&gt;</code> to navigate without page reload:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-4"><code>
import { Link } from 'react-router-dom';

function Navbar() {
  return (
    &lt;nav&gt;
      &lt;Link to="/"&gt;Home&lt;/Link&gt;
      &lt;Link to="/about"&gt;About&lt;/Link&gt;
    &lt;/nav&gt;
  );
}
  </code></pre>

  <p class="text-black dark:text-gray-300 mt-4">
    You’re now ready to use routing in your React app! 🎉
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/router-intro') ?>" class="hover:underline">← Previous: React Router Intro</a>
  <a href="<?= base_url('react/router-links') ?>" class="hover:underline">Next: Route / Link / Navigate →</a>
</div>

</main>
