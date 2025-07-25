<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/cors-explained" class="text-blue-600 dark:text-blue-400 hover:underline">CORS Explained</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🌐 CORS (Cross-Origin Resource Sharing) Explained</h1>

  <p class="mb-4">
    CORS is a browser security feature that restricts web pages from making requests to a different domain than the one that served the web page. It helps prevent Cross-Site Request Forgery (CSRF) and data theft.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 What Triggers CORS?</h2>
  <p class="mb-4">
    A CORS error happens when your frontend JavaScript tries to fetch data from a different origin (domain, protocol, or port) without the proper headers being set on the server.
  </p>
  <pre class="bg-gray-100 p-4 overflow-x-auto overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>// Example
fetch("https://api.example.com/data")
  .then(res =&gt; res.json())
  .catch(err =&gt; console.error("CORS error:", err));</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔐 Same-Origin Policy</h2>
  <p class="mb-4">
    By default, browsers follow the <strong>Same-Origin Policy</strong>, which blocks reading responses from other origins unless CORS headers are explicitly allowed.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">✅ How to Fix CORS</h2>
  <p class="mb-4">
    The <strong>server</strong> needs to send proper CORS headers. Here’s how you might fix it depending on the backend:
  </p>

  <h3 class="text-xl font-semibold mt-4 mb-2">🟢 Node.js (Express)</h3>
  <pre class="bg-green-100 p-4 overflow-x-auto rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>const express = require("express");
const cors = require("cors");
const app = express();

app.use(cors()); // Allow all origins

// OR limit to a specific domain
app.use(cors({ origin: "https://your-frontend.com" }));</code></pre>

  <h3 class="text-xl font-semibold mt-4 mb-2">🔵 PHP</h3>
  <pre class="bg-green-100 overflow-x-auto p-4 rounded text-sm mb-4 dark:bg-gray-800 dark:text-white"><code>header("Access-Control-Allow-Origin: *");
// OR for specific origin
header("Access-Control-Allow-Origin: https://your-frontend.com");</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Preflight Requests</h2>
  <p class="mb-4">
    For requests that modify data (e.g., POST, PUT), browsers may send an <code>OPTIONS</code> request first to check permissions. Your server must respond with:
  </p>
  <ul class="list-disc list-inside mb-4">
    <li><code>Access-Control-Allow-Methods</code></li>
    <li><code>Access-Control-Allow-Headers</code></li>
    <li><code>Access-Control-Allow-Origin</code></li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 You Can't Bypass CORS on Frontend</h2>
  <p class="mb-4">
    CORS is enforced by the browser. You cannot “disable” it on the client side. If you're testing locally, use a proxy server or configure the backend to allow localhost.
  </p>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Tip:</strong> Use browser DevTools → Network tab to inspect CORS headers like <code>Access-Control-Allow-Origin</code>.
  </div>

  <div class="mt-4 flex justify-between  items-center flex-wrap gap-4  text-blue-600 dark:text-blue-400 font-semibold">
    <a href="<?= base_url('js/xss-eval') ?>" class="hover:underline">← Previous: Avoiding XSS / eval()</a>
    <a href="<?= base_url('js/csp') ?>" class="hover:underline ms-auto">Next: Content Security Policy →</a>
</div>

</main>
