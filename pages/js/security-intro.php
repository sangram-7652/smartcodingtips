<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/security-basics" class="text-blue-600 hover:underline">Security Basics</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🔒 JavaScript Security Basics</h1>

  <p class="mb-4">
    Web security is critical when writing JavaScript, especially when working with user inputs, APIs, and the DOM. Below are some of the core JavaScript security practices every developer should know.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧼 1. Input Sanitization</h2>
  <p class="mb-4">
    Always sanitize and validate user inputs to prevent malicious code from being injected or misused.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const sanitize = (input) => {
  const div = document.createElement("div");
  div.textContent = input;
  return div.innerHTML;
};</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🚫 2. Avoid <code>eval()</code> and <code>new Function()</code></h2>
  <p class="mb-4">
    Using <code>eval()</code> opens your application to code injection attacks. Always avoid dynamic code execution unless absolutely necessary.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">⚠️ 3. Cross-Site Scripting (XSS) Protection</h2>
  <p class="mb-4">
    XSS allows attackers to inject malicious scripts into webpages. Never directly insert user input into the DOM without sanitizing.
  </p>
  <p class="mb-4">
    Use <strong>textContent</strong> instead of <strong>innerHTML</strong> when outputting untrusted data.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🌐 4. Use HTTPS & Secure APIs</h2>
  <p class="mb-4">
    Always use HTTPS to encrypt data in transit. Never send sensitive information over HTTP. Ensure your backend APIs support and enforce HTTPS.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🌍 5. Cross-Origin Resource Sharing (CORS)</h2>
  <p class="mb-4">
    CORS policies define which domains can communicate with your server. Set appropriate headers on your API to avoid exposing data to unintended sources.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// Example: Express.js
res.setHeader("Access-Control-Allow-Origin", "https://yourdomain.com");</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛑 6. Content Security Policy (CSP)</h2>
  <p class="mb-4">
    A CSP header restricts which scripts and resources are allowed to run on your page, preventing XSS and data injection attacks.
  </p>
  <pre class="bg-gray-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// Example HTTP Header
Content-Security-Policy: default-src 'self'; script-src 'self';</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔑 7. Avoid Hardcoding Secrets</h2>
  <p class="mb-4">
    Never expose API keys, tokens, or passwords in frontend JavaScript. Use environment variables on the server side to protect credentials.
  </p>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Tip:</strong> Always keep dependencies updated and regularly audit your packages using tools like <code>npm audit</code>.
  </div>

  <div class="mt-4">
    <p class="font-semibold">Next: <a href="js.php?page=js/xss-eval" class="text-blue-600 hover:underline">Avoiding XSS / eval() →</a></p>
</div>
</main>
