<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/deployment" class="text-blue-600 hover:underline dark:text-blue-400">Deployment</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Environment Variables</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚙️ Environment Variables in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Environment variables allow you to safely manage secrets, API endpoints, and config values in different environments (development, production, staging, etc.).
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📁 1. Create a <code>.env</code> File</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
REACT_APP_API_URL=https://api.example.com
REACT_APP_FIREBASE_KEY=your-firebase-api-key
</code></pre>

  <p class="text-black dark:text-gray-300">
    All environment variables <strong>must start</strong> with <code>REACT_APP_</code> or they won’t be accessible in your app.
  </p>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧠 2. Use in Your Code</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const apiUrl = process.env.REACT_APP_API_URL;

fetch(`${apiUrl}/posts`)
  .then(res =&gt; res.json())
  .then(data =&gt; console.log(data));
</code></pre>

  <!-- Step 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Restart After Changes</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    After editing <code>.env</code>, restart the dev server:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
npm start
# or
yarn start
</code></pre>

  <!-- Step 4 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔐 4. Don’t Commit .env</h2>
  <p class="text-black dark:text-gray-300">
    Add your <code>.env</code> file to <code>.gitignore</code> to prevent accidental leaks of secrets:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
# .gitignore
.env
</code></pre>

  <!-- Step 5 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌍 5. Environment-Specific Files</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>.env</code> – default</li>
    <li><code>.env.development</code> – used in dev mode</li>
    <li><code>.env.production</code> – used when you run <code>npm run build</code></li>
  </ul>

  <!-- Warning -->
  <div class="bg-yellow-100 dark:bg-yellow-800 text-yellow-900 dark:text-yellow-200 p-4 rounded mb-6">
    ⚠️ Do not store private keys or secrets directly in React — frontend code is always exposed to the user.
  </div>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/hosting') ?>" class="hover:underline">← Previous: Hosting Platforms</a>
  <a href="<?= base_url('react/cicd') ?>" class="hover:underline ms-auto">Next: CI/CD Basics →</a>
</div>

</main>
