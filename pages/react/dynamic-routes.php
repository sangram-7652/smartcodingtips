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
      <li class="flex items-center">Dynamic Routing</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧭 Dynamic Routing in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Dynamic routing allows your app to handle URLs with changing values — such as user profiles, blog posts, or product pages — using parameters in the URL path.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📍 1. Define a Route with Parameters</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Use the <code>:param</code> syntax to declare a dynamic segment in the path.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { Routes, Route } from 'react-router-dom';
import ProductPage from './pages/ProductPage';

function App() {
  return (
    &lt;Routes&gt;
      &lt;Route path="/product/:id" element={&lt;ProductPage /&gt;} /&gt;
    &lt;/Routes&gt;
  );
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 2. Access URL Parameters</h2>
  <p class="mb-2 text-black dark:text-gray-300">
    Inside your component, use the <code>useParams()</code> hook from <code>react-router-dom</code> to retrieve the dynamic value.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
import { useParams } from 'react-router-dom';

function ProductPage() {
  const { id } = useParams();
  return &lt;h2&gt;Product ID: {id}&lt;/h2&gt;;
}
</code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 3. Example Routes</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>/user/42</code> → Show user with ID 42</li>
    <li><code>/blog/react-hooks</code> → Load a blog post by slug</li>
    <li><code>/product/123</code> → Product page for item 123</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ 4. Multiple Parameters</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
&lt;Route path="/post/:category/:slug" element={&lt;BlogPost /&gt;} /&gt;

const { category, slug } = useParams();
</code></pre>

  <p class="text-black dark:text-gray-300">
    With dynamic routing, you can generate pages based on user interaction, API data, or backend content — enabling you to build flexible, scalable UIs.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/router-404" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: 404 & Catch-All Routes →
    </a>
  </div>

</main>
