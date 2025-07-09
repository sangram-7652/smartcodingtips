<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/content-security-policy" class="text-blue-600 hover:underline">Content Security Policy</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🛡️ Content Security Policy (CSP) Explained</h1>

  <p class="mb-4">
    A <strong>Content Security Policy (CSP)</strong> is a browser security feature that helps prevent cross-site scripting (XSS), data injection, and code execution attacks by restricting the sources from which content can be loaded.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔍 What CSP Does</h2>
  <p class="mb-4">
    CSP allows you to define which sources the browser should trust for loading resources like scripts, styles, images, fonts, and more.
  </p>

  <h3 class="text-xl font-semibold mt-4 mb-2">📦 Example CSP Header</h3>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>Content-Security-Policy: default-src 'self'; script-src 'self' https://apis.example.com; object-src 'none';</code></pre>

  <ul class="list-disc list-inside mb-4">
    <li><code>default-src 'self'</code>: Only allow resources from the same origin</li>
    <li><code>script-src</code>: Allow scripts only from the same origin and <code>apis.example.com</code></li>
    <li><code>object-src 'none'</code>: Block Flash, plugins, etc.</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 Preventing Inline Scripts</h2>
  <p class="mb-4">
    By default, CSP blocks inline JavaScript unless you allow it explicitly using <code>'unsafe-inline'</code> (which is not recommended).
  </p>
  <pre class="bg-red-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// ❌ This will be blocked if CSP disallows inline scripts
&lt;script&gt;alert("XSS!")&lt;/script&gt;
</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔐 Safer Alternatives</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use external scripts with proper <code>script-src</code> rules</li>
    <li>Use <code>nonce</code> or <code>hash</code> based validation for inline scripts</li>
  </ul>

  <h3 class="text-xl font-semibold mt-4 mb-2">🔑 Example with Nonce</h3>
  <pre class="bg-green-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// Header:
Content-Security-Policy: script-src 'nonce-abc123'

// HTML:
&lt;script nonce="abc123"&gt;console.log("Secure inline script")&lt;/script&gt;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚙️ Setting CSP in Different Languages</h2>

  <h4 class="font-semibold mt-4 mb-1">PHP:</h4>
  <pre class="bg-blue-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>header("Content-Security-Policy: default-src 'self'; script-src 'self';");</code></pre>

  <h4 class="font-semibold mt-4 mb-1">Express (Node.js):</h4>
  <pre class="bg-blue-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>res.setHeader("Content-Security-Policy", "default-src 'self'; script-src 'self'");</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧪 Testing Your CSP</h2>
  <ul class="list-disc list-inside mb-4">
    <li>Use browser DevTools → Console for CSP violations</li>
    <li>Use <a href="https://csp-evaluator.withgoogle.com/" class="text-blue-600 underline" target="_blank">Google CSP Evaluator</a></li>
    <li>Check headers using <code>curl -I</code> or browser DevTools</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Tip:</strong> Start with <code>Content-Security-Policy-Report-Only</code> to monitor without breaking your site.
  </div>

</main>
