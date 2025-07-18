<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600 hover:underline dark:text-blue-400">Introduction</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center text-black dark:text-gray-400">Setting Up React</li>
    </ol>
  </nav>

  <!-- Page Heading -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚙️ Setting Up React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    React can be added to your project in multiple ways. You can start small by embedding it into an HTML page or go full-scale with modern build tools like Vite or Create React App (CRA).
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Option 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📄 Option 1: Use React via CDN (Quick Start)</h2>
  <p class="mb-4 text-black dark:text-gray-300">This is great for beginners or small experiments without needing a build process.</p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
  &lt;head&gt;
    &lt;script src="https://unpkg.com/react@18/umd/react.development.js"&gt;&lt;/script&gt;
    &lt;script src="https://unpkg.com/react-dom@18/umd/react-dom.development.js"&gt;&lt;/script&gt;
  &lt;/head&gt;
  &lt;body&gt;
    &lt;div id="root"&gt;&lt;/div&gt;
    &lt;script&gt;
      const root = ReactDOM.createRoot(document.getElementById('root'));
      root.render(React.createElement('h1', null, 'Hello React!'));
    &lt;/script&gt;
  &lt;/body&gt;
&lt;/html&gt;
</pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Option 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 Option 2: Create React App (CRA)</h2>
  <p class="mb-4 text-black dark:text-gray-300">CRA is an official way to scaffold a React project with zero config.</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white">
npx create-react-app my-app
cd my-app
npm start
</pre>

  <p class="mb-6 text-black dark:text-gray-300">
    This creates a project with Webpack, Babel, hot reload, and production build setup—all ready to go.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Option 3 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚡ Option 3: Vite + React (Recommended)</h2>
  <p class="mb-4 text-black dark:text-gray-300">Vite is faster and more modern than CRA, perfect for new projects.</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white">
npm create vite@latest my-react-app -- --template react
cd my-react-app
npm install
npm run dev
</pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Vite offers instant dev start, faster builds, and ES modules support out of the box.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Use CDN for learning or testing without a build setup</li>
    <li>Use Create React App for simplicity and full setup</li>
    <li>Use Vite for faster, modern development experience</li>
  </ul>

  <!-- Next Navigation -->
<div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/react-vs-others') ?>" class="hover:underline">← Previous: React vs Vanilla JS / Angular / Vue</a>
  <a href="<?= base_url('react/first-app') ?>" class="hover:underline">Next: Your First React App →</a>
</div>

</main>
