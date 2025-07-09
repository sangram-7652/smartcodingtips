<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/routing-intro" class="text-blue-600 hover:underline dark:text-blue-400">Routing</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">404 & Protected Routes</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚧 404 & Protected Routes in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Let's handle missing routes with a custom 404 page, and secure sensitive pages using protected routing.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- 404 Page Section -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">❌ 1. Handling 404 (Not Found)</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use a wildcard path <code>*</code> to show a custom page for unknown URLs.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// NotFound.jsx
export default function NotFound() {
  return &lt;h2&gt;404 - Page Not Found&lt;/h2&gt;;
}

// App.jsx
&lt;Routes&gt;
  &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
  &lt;Route path="*" element={&lt;NotFound /&gt;} /&gt;
&lt;/Routes&gt;
</code></pre>

  <!-- Protected Routes Section -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔒 2. Creating Protected Routes</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use a wrapper component to restrict access based on authentication.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// ProtectedRoute.jsx
import { Navigate } from 'react-router-dom';

function ProtectedRoute({ children }) {
  const isLoggedIn = true; // Replace with real auth check
  return isLoggedIn ? children : &lt;Navigate to="/login" /&gt;;
}
</code></pre>

  <h2 class="text-xl font-semibold mb-4 text-black dark:text-white">🔗 3. Use It in Your Routes</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
&lt;Routes&gt;
  &lt;Route path="/dashboard" element={
    &lt;ProtectedRoute&gt;
      &lt;Dashboard /&gt;
    &lt;/ProtectedRoute&gt;
  } /&gt;
&lt;/Routes&gt;
</code></pre>

  <p class="text-black dark:text-gray-300">
    This ensures only logged-in users can view protected pages like dashboards, profiles, or admin panels.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/fetch-api" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Using fetch() → 
    </a>
  </div>

</main>
