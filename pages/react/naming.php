<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/basics" class="text-blue-600 hover:underline dark:text-blue-400">Basics</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Naming Conventions</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧾 Naming Conventions in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Consistent naming improves readability, maintainability, and scalability. Below are standard naming practices followed in professional React projects.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Sections -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📁 Folder & File Naming</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6 space-y-2">
    <li><strong>Folder Names:</strong> lowercase and kebab-case → <code>components/, blog-posts/</code></li>
    <li><strong>Component Files:</strong> PascalCase → <code>Navbar.jsx, BlogCard.jsx</code></li>
    <li><strong>Hooks:</strong> camelCase with <code>use</code> prefix → <code>useAuth.js</code></li>
    <li><strong>Stylesheets:</strong> Match component → <code>Button.module.css</code></li>
    <li><strong>Tests:</strong> Match the component → <code>Navbar.test.js</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔤 Component Naming</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <strong>PascalCase</strong> for all components → <code>BlogCard</code>, <code>LoginForm</code></li>
    <li>Always start functional components with an uppercase letter</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚙️ Variable & Function Naming</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>camelCase</strong> for variables and functions → <code>isLoggedIn, fetchUserData()</code></li>
    <li><strong>UPPER_CASE</strong> for constants → <code>API_URL</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 State & Props Naming</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Name state clearly → <code>isLoading, currentUser, postList</code></li>
    <li>Props should be descriptive → <code>onSubmit, isOpen, userData</code></li>
    <li>Use <code>handle</code> prefix for event handlers → <code>handleClick()</code>, <code>handleLogin()</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 CSS Naming (if not using Tailwind)</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <strong>BEM</strong> or kebab-case → <code>card-title</code>, <code>form-input--error</code></li>
    <li>For CSS Modules, match the component → <code>Button.module.css</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Tips</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Be consistent across your app</li>
    <li>Use clear, meaningful names over short ones</li>
    <li>Avoid abbreviations unless common (e.g., API, URL)</li>
    <li>Prefix custom hooks with <code>use</code> and context files with <code>use</code> or <code>ThemeContext</code></li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/performance-tips" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Performance Tips →
    </a>
  </div>

</main>
