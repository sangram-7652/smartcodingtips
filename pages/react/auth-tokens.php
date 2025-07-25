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
      <li class="flex items-center">Auth Tokens</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔐 Auth Tokens in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Auth tokens, like JWT (JSON Web Tokens), are commonly used to manage user authentication in React apps. They are passed with each request to validate the user’s session.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- What is a token -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧾 1. What Is an Auth Token?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>A token is a string (usually JWT) issued by the server after login</li>
    <li>Includes user data, expiry, and signature</li>
    <li>Used to validate requests without needing credentials every time</li>
  </ul>

  <!-- Where to Store -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 2. Where to Store Tokens?</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li><strong>LocalStorage</strong>: Simple, persists across tabs, but vulnerable to XSS</li>
    <li><strong>SessionStorage</strong>: Clears on tab close, but also XSS-vulnerable</li>
    <li><strong>HTTP-only cookies</strong>: Most secure (can't be accessed via JavaScript)</li>
  </ul>

  <!-- Using Tokens in Fetch -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔧 3. Sending Tokens with Requests</h2>
  <p class="text-black dark:text-gray-300 mb-2">
    Include the token in the <code>Authorization</code> header of API calls:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
const token = localStorage.getItem('authToken');

fetch('/api/user', {
  headers: {
    Authorization: `Bearer ${token}`
  }
});
</code></pre>

  <!-- Persisting Login -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔄 4. Persisting Auth State</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Use <code>useEffect</code> to check for token on app load</li>
    <li>Store token in context or Redux after login</li>
    <li>Clear token on logout</li>
  </ul>

  <!-- Token Expiry -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⏳ 5. Token Expiry & Refresh</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Tokens usually have an expiry time (e.g., 15 min)</li>
    <li>Use refresh tokens (stored in HTTP-only cookies) to silently renew access tokens</li>
    <li>Log user out if token is invalid or expired</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Use tokens to authenticate users in your React app</li>
    <li>Store securely: prefer HTTP-only cookies over localStorage</li>
    <li>Always include tokens in request headers for protected APIs</li>
    <li>Implement refresh logic or force logout on expiry</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/xss-protection') ?>" class="hover:underline">← Previous: XSS Protection</a>
  <a href="<?= base_url('react/env-vars') ?>" class="hover:underline ms-auto">Next: Environment Variables →</a>
</div>

</main>
