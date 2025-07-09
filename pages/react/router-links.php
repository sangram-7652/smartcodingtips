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
      <li class="flex items-center">Route / Link / Navigate</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧭 Route / Link / Navigate</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React Router gives you powerful tools to build multi-page apps using routes, links, and programmatic navigation.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Route -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🛤️ 1. Route</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use <code>&lt;Route&gt;</code> inside <code>&lt;Routes&gt;</code> to define which component renders at each path.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { Routes, Route } from 'react-router-dom';
import Home from './pages/Home';
import About from './pages/About';

function App() {
  return (
    &lt;Routes&gt;
      &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
      &lt;Route path="/about" element={&lt;About /&gt;} /&gt;
    &lt;/Routes&gt;
  );
}
  </code></pre>

  <!-- Link -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 2. Link</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Replace anchor tags with <code>&lt;Link&gt;</code> to enable client-side navigation without reloading.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
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

  <!-- Navigate -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">➡️ 3. Navigate (Programmatic Navigation)</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use <code>useNavigate()</code> to navigate via code — helpful after form submission or button click.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useNavigate } from 'react-router-dom';

function LoginButton() {
  const navigate = useNavigate();

  const handleLogin = () => {
    // Assume login logic is done
    navigate('/dashboard');
  };

  return &lt;button onClick={handleLogin}&gt;Login&lt;/button&gt;;
}
  </code></pre>

  <p class="text-black dark:text-gray-300">
    These three features make routing flexible and user-friendly in any React app.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/router-nested" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Nested Routes →
    </a>
  </div>

</main>
