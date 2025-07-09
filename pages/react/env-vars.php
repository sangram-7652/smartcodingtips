<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/configuration" class="text-blue-600 hover:underline dark:text-blue-400">Configuration</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Environment Variables</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚙️ Environment Variables in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Environment variables allow you to configure your React app for different environments (development, testing, production) without changing the source code.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Declaring Variables -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📝 1. Declaring Environment Variables</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    In Create React App, you can declare variables in a file named <code>.env</code>:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
REACT_APP_API_URL=https://api.example.com
REACT_APP_VERSION=1.0.0
</code></pre>

  <p class="text-black dark:text-gray-300 mb-6">
    All environment variables **must** start with <code>REACT_APP_</code> to be exposed in the frontend.
  </p>

  <!-- Accessing in Code -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Accessing Variables in Code</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const apiUrl = process.env.REACT_APP_API_URL;

console.log('Backend API URL:', apiUrl);
</code></pre>

  <!-- Using in Fetch -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 3. Using with Fetch or Axios</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Use environment variables to dynamically set base URLs for APIs:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
fetch(`${process.env.REACT_APP_API_URL}/users`)
  .then(res =&gt; res.json())
  .then(data =&gt; console.log(data));
</code></pre>

  <!-- Environment-Specific Files -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 4. Environment-Specific Files</h2>
  <p class="text-black dark:text-gray-300 mb-4">Create separate env files for different modes:</p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>.env</code> – shared across all</li>
    <li><code>.env.development</code> – for dev mode</li>
    <li><code>.env.production</code> – for production</li>
    <li><code>.env.test</code> – for test environments</li>
  </ul>

  <!-- Rebuild Required -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">♻️ 5. Rebuild After Changes</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    React injects environment variables at build time. So if you change a variable, you need to restart your dev server:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npm start
</code></pre>

  <!-- Security Note -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔒 6. Security Warning</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    Never store secrets like API keys or tokens directly in frontend code or env files. Use a secure backend to keep secrets private.
  </p>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Use <code>REACT_APP_*</code> to define frontend env variables</li>
    <li>Access using <code>process.env</code></li>
    <li>Restart dev server after changes</li>
    <li>Keep secrets on the server, not in React env</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/deployment" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: React App Deployment →
    </a>
  </div>

</main>
