<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/node-npm" class="text-blue-600 hover:underline">Node.js & npm</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🌐 Introduction to Node.js and npm</h1>

  <p class="mb-4">
    Node.js is a runtime environment that allows you to run JavaScript code outside the browser — commonly used for building backend services, command-line tools, and more. npm (Node Package Manager) is its companion tool used to manage libraries and dependencies.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ What is Node.js?</h2>
  <p class="mb-4">
    Node.js is built on the V8 JavaScript engine (the same engine used in Chrome) and allows developers to use JavaScript for server-side scripting.
  </p>
  <ul class="list-disc list-inside mb-4">
    <li>Runs JavaScript on the server</li>
    <li>Handles file systems, databases, HTTP, etc.</li>
    <li>Event-driven and non-blocking (asynchronous) architecture</li>
  </ul>

  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm"><code>// hello.js
console.log("Hello from Node.js!");
</code></pre>

  <p class="mb-4">To run this file:</p>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm"><code>node hello.js</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📦 What is npm?</h2>
  <p class="mb-4">
    npm is the default package manager for Node.js. It helps you install and manage external packages (libraries), dependencies, and scripts.
  </p>

  <ul class="list-disc list-inside mb-4">
    <li>Install packages: <code>npm install axios</code></li>
    <li>Run custom scripts: <code>npm run start</code></li>
    <li>Manages your project with <code>package.json</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛠️ Installing Node.js & npm</h2>
  <ol class="list-decimal list-inside mb-4">
    <li>Go to <a href="https://nodejs.org" class="text-blue-600 underline" target="_blank">https://nodejs.org</a></li>
    <li>Download the LTS version</li>
    <li>Run the installer (npm is included)</li>
    <li>Verify installation:
      <pre class="bg-gray-100 p-3 rounded text-sm mt-2"><code>node -v
npm -v</code></pre>
    </li>
  </ol>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Creating Your First npm Project</h2>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm"><code>mkdir my-app
cd my-app
npm init -y
</code></pre>
  <p class="mb-4">
    This creates a <code>package.json</code> file — a manifest that stores your project's metadata and dependencies.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">📁 Installing a Package</h2>
  <p class="mb-4">Example: Install <code>axios</code> for making HTTP requests:</p>
  <pre class="bg-gray-100 p-4 rounded mb-4 text-sm"><code>npm install axios</code></pre>
  <p class="mb-4">This adds a <code>node_modules</code> folder and updates <code>package.json</code>.</p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔁 Running a Script</h2>
  <p class="mb-4">Add this to your <code>package.json</code>:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm"><code>{
  "scripts": {
    "start": "node index.js"
  }
}</code></pre>
  <p class="mb-4">Then run:</p>
  <pre class="bg-gray-100 p-4 rounded text-sm"><code>npm start</code></pre>

  <div class="bg-blue-100 border-l-4 border-blue-500 text-blue-900 p-4 rounded mt-6">
    💡 <strong>Tip:</strong> Node.js is not just for servers. You can build tools, APIs, and even desktop or full-stack apps using frameworks like Electron or Next.js.
  </div>

</main>
