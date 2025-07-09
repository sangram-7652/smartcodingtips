<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="javascript.php?page=js/avoid-xss-eval" class="text-blue-600 hover:underline">Avoiding XSS & eval()</a>
      </li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4">🚫 Avoiding XSS & <code>eval()</code> in JavaScript</h1>

  <p class="mb-4">
    Cross-Site Scripting (XSS) and unsafe usage of <code>eval()</code> are two of the most common JavaScript security issues. Let’s explore what they are and how to prevent them.
  </p>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🔐 What is XSS?</h2>
  <p class="mb-4">
    XSS occurs when an attacker injects malicious JavaScript into a webpage that gets executed in the user's browser. This can steal cookies, log keystrokes, or hijack sessions.
  </p>

  <h3 class="text-xl font-semibold mt-4 mb-2">❌ Bad Example (XSS Vulnerable)</h3>
  <pre class="bg-red-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// User input directly added to innerHTML
const input = "&lt;script&gt;alert('XSS')&lt;/script&gt;";
document.getElementById("output").innerHTML = input;</code></pre>

  <h3 class="text-xl font-semibold mt-4 mb-2">✅ Good Example (Safe)</h3>
  <pre class="bg-green-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>// Use textContent to escape HTML
const input = "&lt;script&gt;alert('XSS')&lt;/script&gt;";
document.getElementById("output").textContent = input;</code></pre>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🧨 Why <code>eval()</code> is Dangerous</h2>
  <p class="mb-4">
    <code>eval()</code> executes strings as code, which can be exploited to run malicious scripts if user input is passed into it.
  </p>

  <h3 class="text-xl font-semibold mt-4 mb-2">❌ Avoid This</h3>
  <pre class="bg-red-100 p-4 rounded text-sm mb-4 dark:bg-gray-900 dark:text-white"><code>const userCode = prompt("Enter JS:");
eval(userCode); // 👈 Extremely dangerous!</code></pre>

  <h3 class="text-xl font-semibold mt-4 mb-2">✅ Use Safe Alternatives</h3>
  <ul class="list-disc list-inside mb-4">
    <li>For math: use <code>Function()</code> only with caution or better yet, a math parser.</li>
    <li>Use <code>JSON.parse()</code> instead of <code>eval()</code> to handle JSON safely.</li>
    <li>Avoid dynamic code generation altogether — it's rarely necessary.</li>
  </ul>

  <h2 class="text-2xl font-semibold mt-6 mb-2">🛡️ Best Practices</h2>
  <ul class="list-disc list-inside mb-6">
    <li>Always sanitize and validate input.</li>
    <li>Escape output that goes into the DOM.</li>
    <li>Use libraries like <code>DOMPurify</code> to sanitize rich text safely.</li>
    <li>Set a strong Content Security Policy (CSP).</li>
  </ul>

  <div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-900 p-4 rounded">
    💡 <strong>Pro Tip:</strong> Never trust user input — always treat it as unsafe until properly validated and sanitized.
  </div>

</main>
