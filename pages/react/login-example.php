<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/forms" class="text-blue-600 hover:underline dark:text-blue-400">Forms</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Login Example</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔐 React Login Form Example</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In this example, we’ll build a simple login form using controlled components. It includes input handling, validation, and submission handling.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 Step-by-Step Code</h2>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-4"><code>
import React, { useState } from 'react';

function LoginForm() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState('');

  const handleSubmit = (e) =&gt; {
    e.preventDefault();

    if (!email || !password) {
      setError("All fields are required.");
      return;
    }

    if (password.length &lt; 6) {
      setError("Password must be at least 6 characters.");
      return;
    }

    setError('');
    console.log("Logging in with", email, password);
    // Send data to backend or redirect
  };

  return (
    &lt;form onSubmit={handleSubmit} className="space-y-4"&gt;
      &lt;div&gt;
        &lt;label className="block mb-1 font-medium"&gt;Email&lt;/label&gt;
        &lt;input
          type="email"
          className="w-full px-3 py-2 border rounded"
          value={email}
          onChange={(e) =&gt; setEmail(e.target.value)}
        /&gt;
      &lt;/div&gt;

      &lt;div&gt;
        &lt;label className="block mb-1 font-medium"&gt;Password&lt;/label&gt;
        &lt;input
          type="password"
          className="w-full px-3 py-2 border rounded"
          value={password}
          onChange={(e) =&gt; setPassword(e.target.value)}
        /&gt;
      &lt;/div&gt;

      {error && &lt;p className="text-red-600"&gt;{error}&lt;/p&gt;}

      &lt;button
        type="submit"
        className="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700"
      &gt;
        Login
      &lt;/button&gt;
    &lt;/form&gt;
  );
}

export default LoginForm;
</code></pre>

  <h2 class="text-xl font-semibold mb-2 text-black dark:text-white">✨ Key Concepts</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>✅ Controlled components with <code>useState()</code></li>
    <li>✅ Input validation with simple conditions</li>
    <li>✅ Submit handler with <code>preventDefault()</code></li>
    <li>✅ Error display with conditional rendering</li>
  </ul>

  <p class="text-black dark:text-gray-300">
    This is the foundation for login or authentication forms. For production apps, you'll typically add server requests and token handling.
  </p>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/form-libraries') ?>" class="hover:underline">← Previous: Formik / RHF / Yup</a>
  <a href="<?= base_url('react/router-intro') ?>" class="hover:underline">Next: React Router Intro →</a>
</div>


</main>
