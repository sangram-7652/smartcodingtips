<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/build-tools" class="text-blue-600 hover:underline">Build Tools</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">⚙️ Vite, Webpack & Babel Explained</h1>

  <p class="mb-4">
    As your JavaScript projects grow, you'll need tools to bundle, transpile, and optimize your code. <strong>Vite, Webpack,</strong> and <strong>Babel</strong> are essential tools in modern web development.
  </p>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚡ What is Vite?</h2>
  <p class="mb-4">
    <strong>Vite</strong> is a fast build tool and development server created by Evan You (creator of Vue). It’s optimized for speed with native ES Modules and instant hot module replacement.
  </p>

  <ul class="list-disc list-inside mb-4">
    <li>Extremely fast dev server</li>
    <li>Zero-config support for Vue, React, etc.</li>
    <li>Built-in ES Module support</li>
  </ul>

  <h3 class="text-lg font-semibold mb-2">Install & Use Vite:</h3>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>npm create vite@latest my-app
cd my-app
npm install
npm run dev</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧱 What is Webpack?</h2>
  <p class="mb-4">
    <strong>Webpack</strong> is a powerful module bundler. It processes JavaScript, CSS, images, and more into a single bundle or optimized output — but often requires configuration.
  </p>

  <ul class="list-disc list-inside mb-4">
    <li>Bundles JS, CSS, images, etc.</li>
    <li>Supports plugins and loaders (like Babel)</li>
    <li>Can be used with React, Vue, Angular</li>
  </ul>

  <h3 class="text-lg font-semibold mb-2">Basic Webpack Setup:</h3>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>npm install --save-dev webpack webpack-cli</code></pre>
  <p class="mb-2">Create a <code>webpack.config.js</code>:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm"><code>module.exports = {
  entry: './src/index.js',
  output: {
    filename: 'bundle.js',
    path: __dirname + '/dist'
  },
  mode: 'development'
};</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 What is Babel?</h2>
  <p class="mb-4">
    <strong>Babel</strong> is a JavaScript compiler that converts modern JavaScript (ES6+) into backwards-compatible JavaScript for older browsers.
  </p>

  <ul class="list-disc list-inside mb-4">
    <li>Transpiles ES6+ code to ES5</li>
    <li>Used with Webpack or standalone</li>
    <li>Required for browser compatibility</li>
  </ul>

  <h3 class="text-lg font-semibold mb-2">Install Babel with Webpack:</h3>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4"><code>npm install --save-dev babel-loader @babel/core @babel/preset-env</code></pre>

  <p class="mb-2">Update <code>webpack.config.js</code> with a loader:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm"><code>module: {
  rules: [
    {
      test: /\.m?js$/,
      exclude: /node_modules/,
      use: {
        loader: 'babel-loader',
        options: {
          presets: ['@babel/preset-env']
        }
      }
    }
  ]
}</code></pre>

  <hr class="my-6">

  <h2 class="text-2xl font-semibold mt-6 mb-2">🆚 Vite vs Webpack vs Babel</h2>
  <table class="w-full border mt-4 mb-6 text-sm">
    <thead>
      <tr class="bg-gray-200">
        <th class="border px-4 py-2 text-left">Tool</th>
        <th class="border px-4 py-2 text-left">Purpose</th>
        <th class="border px-4 py-2 text-left">Use Case</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border px-4 py-2">Vite</td>
        <td class="border px-4 py-2">Dev server + build tool</td>
        <td class="border px-4 py-2">Fast dev experience with modern JS</td>
      </tr>
      <tr>
        <td class="border px-4 py-2">Webpack</td>
        <td class="border px-4 py-2">Bundle and optimize assets</td>
        <td class="border px-4 py-2">Customizable, powerful configurations</td>
      </tr>
      <tr>
        <td class="border px-4 py-2">Babel</td>
        <td class="border px-4 py-2">Transpile JS to older syntax</td>
        <td class="border px-4 py-2">Ensure browser compatibility</td>
      </tr>
    </tbody>
  </table>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Pro Tip:</strong> If you're building a modern front-end app, try Vite first. Use Webpack + Babel when you need full control or enterprise-level bundling.
  </div>

</main>
