<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/security" class="text-blue-600 hover:underline dark:text-blue-400">Security</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">XSS Protection</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🛡️ XSS Protection in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Cross-Site Scripting (XSS) is a common security vulnerability where malicious scripts are injected into web pages viewed by other users. React provides built-in protection, but it's important to understand the risks and best practices.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- React is Safe by Default -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔐 1. React Escapes by Default</h2>
  <p class="text-black dark:text-gray-300 mb-6">
    By default, React escapes all values embedded in JSX. This means user data rendered through JSX cannot run malicious scripts.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
const name = "&lt;img src=x onerror=alert('XSS') /&gt;";
return &lt;div&gt;Hello {name}&lt;/div&gt;; // Safe: React escapes it
</code></pre>

  <!-- Avoid dangerouslySetInnerHTML -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">☠️ 2. Avoid <code>dangerouslySetInnerHTML</code></h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Using <code>dangerouslySetInnerHTML</code> can bypass React's XSS protections and allow attackers to inject scripts.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
// ❌ Dangerous unless sanitized
&lt;div dangerouslySetInnerHTML={{ __html: userInput }} /&gt;
</code></pre>

  <p class="text-black dark:text-gray-300 mb-6">
    If absolutely necessary, sanitize input using libraries like <code>DOMPurify</code>:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import DOMPurify from 'dompurify';

const safeHtml = DOMPurify.sanitize(userInput);
&lt;div dangerouslySetInnerHTML={{ __html: safeHtml }} /&gt;
</code></pre>

  <!-- API Data -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🌐 3. Be Careful with API Content</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Always assume API data could be unsafe</li>
    <li>Escape or sanitize dynamic content from APIs before rendering as HTML</li>
    <li>Never trust client-side input for rendering raw HTML</li>
  </ul>

  <!-- CSP -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 4. Use Content Security Policy (CSP)</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Add a CSP header to prevent inline scripts and control script loading:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
Content-Security-Policy: default-src 'self'; script-src 'self';
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>React escapes content by default — this protects against XSS</li>
    <li>Never use <code>dangerouslySetInnerHTML</code> unless sanitized</li>
    <li>Sanitize any untrusted HTML using <code>DOMPurify</code></li>
    <li>Enable CSP headers for added protection</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/test-interactions') ?>" class="hover:underline">← Previous: User Interaction Testing</a>
  <a href="<?= base_url('react/auth-tokens') ?>" class="hover:underline">Next: Auth Tokens →</a>
</div>

</main>
