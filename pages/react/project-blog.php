<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/projects" class="text-blue-600 hover:underline dark:text-blue-400">Projects</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Blog App</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📝 Blog App in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A Blog App lets you display and manage blog posts. In this project, we’ll create a simple version that loads posts, displays them, and uses routing for individual blog detail pages.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Setup Routes and Pages</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// App.jsx
import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './pages/Home';
import BlogDetail from './pages/BlogDetail';

function App() {
  return (
    &lt;BrowserRouter&gt;
      &lt;Routes&gt;
        &lt;Route path="/" element={&lt;Home /&gt;} /&gt;
        &lt;Route path="/blog/:slug" element={&lt;BlogDetail /&gt;} /&gt;
      &lt;/Routes&gt;
    &lt;/BrowserRouter&gt;
  );
}

export default App;
</code></pre>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📃 2. Create Sample Blog Data</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// data.js
export const blogPosts = [
  {
    slug: 'react-hooks-intro',
    title: 'Introduction to React Hooks',
    content: 'Hooks let you use state and other features without writing a class...',
  },
  {
    slug: 'tailwind-with-react',
    title: 'Using Tailwind CSS in React',
    content: 'Tailwind makes it easy to style your React components...',
  }
];
</code></pre>

  <!-- Step 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🏠 3. Home Page with Blog List</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// Home.jsx
import { Link } from 'react-router-dom';
import { blogPosts } from '../data';

function Home() {
  return (
    &lt;div className="space-y-4"&gt;
      &lt;h2 className="text-2xl font-bold"&gt;📝 Blog Posts&lt;/h2&gt;
      {blogPosts.map((post) =&gt; (
        &lt;div key={post.slug} className="p-4 border rounded dark:border-gray-700"&gt;
          &lt;h3 className="text-xl font-semibold"&gt;{post.title}&lt;/h3&gt;
          &lt;Link
            to={`/blog/${post.slug}`}
            className="text-blue-600 hover:underline dark:text-blue-400"
          &gt;
            Read More →
          &lt;/Link&gt;
        &lt;/div&gt;
      ))}
    &lt;/div&gt;
  );
}

export default Home;
</code></pre>

  <!-- Step 4 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📄 4. Blog Detail Page</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
// BlogDetail.jsx
import { useParams } from 'react-router-dom';
import { blogPosts } from '../data';

function BlogDetail() {
  const { slug } = useParams();
  const post = blogPosts.find((b) =&gt; b.slug === slug);

  if (!post) return &lt;p&gt;Post not found&lt;/p&gt;;

  return (
    &lt;div className="space-y-4"&gt;
      &lt;h2 className="text-2xl font-bold"&gt;{post.title}&lt;/h2&gt;
      &lt;p&gt;{post.content}&lt;/p&gt;
    &lt;/div&gt;
  );
}

export default BlogDetail;
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Used <code>react-router-dom</code> for dynamic routing</li>
    <li>Stored blog data in a simple array</li>
    <li>Created list & detail pages with route parameters</li>
    <li>Expandable to use APIs or markdown files later</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/form-validation" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Form Validation →
    </a>
  </div>

</main>
