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
      <li class="flex items-center">React Router Intro</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧭 React Router Introduction</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React Router is the standard library for handling client-side routing in React. It allows you to create navigation between views and keep your UI in sync with the URL.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 1. Installation</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-4"><code>
npm install react-router-dom
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 2. Basic Setup</h2>
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

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧭 3. Navigation Links</h2>
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

  <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">✨ Highlights</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>✅ Declarative routing with `<Route>`</li>
    <li>✅ Nested routes supported</li>
    <li>✅ URL is in sync with component state</li>
    <li>✅ Works well with React Hooks and components</li>
  </ul>

  <p class="text-black dark:text-gray-300">
    React Router enables seamless navigation in single-page apps without full page reloads — giving users a native app-like experience.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/router-routes" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Routes & Nested Routes →
    </a>
  </div>

</main>
