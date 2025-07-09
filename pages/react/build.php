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
      <li class="flex items-center">Build for Production</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚀 Build React App for Production</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    When your React app is ready to go live, you need to optimize and build it for production. React provides a built-in way to do this using <code>npm run build</code>.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 1. Run Build Command</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm run build
</code></pre>
  <p class="text-black dark:text-gray-300">
    This creates an optimized production build in the <code>/build</code> folder.
  </p>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Output Structure</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    The <code>build</code> folder contains:
  </p>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><code>index.html</code> – entry point</li>
    <li><code>static/js</code> – minified JS bundles</li>
    <li><code>static/css</code> – stylesheets</li>
    <li><code>assets</code> – images and other resources</li>
  </ul>

  <!-- Step 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 3. Test Locally</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    Use a static server to preview your build locally:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install -g serve
serve -s build
</code></pre>

  <!-- Step 4 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚚 4. Deploy Options</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>GitHub Pages</strong> – For personal projects</li>
    <li><strong>Vercel / Netlify</strong> – One-click deployment with Git integration</li>
    <li><strong>Firebase / Render / Railway</strong> – Great for full-stack deployment</li>
    <li><strong>Custom Hosting</strong> – Upload the <code>build</code> folder to any static hosting provider (Apache, Nginx, cPanel)</li>
  </ul>

  <!-- Step 5 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔒 5. Set Environment Variables</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    In production, React reads variables from <code>.env</code> files starting with <code>REACT_APP_</code>.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
REACT_APP_API_URL=https://api.example.com
</code></pre>

  <!-- Step 6 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 6. Extra Optimization (Optional)</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>React.lazy</code> and <code>Suspense</code> for lazy loading components</li>
    <li>Remove unused dependencies and console logs</li>
    <li>Analyze your bundle using <code>source-map-explorer</code></li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/deploy-vercel" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Deploy React on Vercel →
    </a>
  </div>

</main>
