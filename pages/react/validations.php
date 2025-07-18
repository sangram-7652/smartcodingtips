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
      <li class="flex items-center">Input Validation</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">✅ Input Validation in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Validating form input is essential for ensuring users submit correct and complete data. React makes this easy by combining state and conditional logic.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 1. Basic Required Field</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
import { useState } from 'react';

function SignupForm() {
  const [email, setEmail] = useState('');
  const [error, setError] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault();
    if (!email) {
      setError('Email is required');
    } else {
      setError('');
      console.log('Submitted:', email);
    }
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;input 
        type="email" 
        value={email} 
        onChange={(e) =&gt; setEmail(e.target.value)} 
      /&gt;
      {error &amp;&amp; &lt;p style={{ color: 'red' }}&gt;{error}&lt;/p&gt;}
      &lt;button type="submit"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
  );
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔍 2. Real-Time Validation</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Validate input as the user types for better user experience:
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
function handleChange(e) {
  const value = e.target.value;
  setEmail(value);

  if (!value.includes('@')) {
    setError('Email must include @');
  } else {
    setError('');
  }
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧪 3. Custom Validation Logic</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Use regex or string methods</li>
    <li>Combine multiple conditions (length, pattern, etc.)</li>
    <li>Display user-friendly messages</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎯 4. Prevent Submit If Invalid</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Always prevent form submission if input fails validation:
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
if (!email || error) {
  return; // stop submission
}
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <p class="text-black dark:text-gray-300">
    Validation ensures your app receives clean and expected data. React's controlled input system makes it simple to enforce real-time rules.
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/forms-controlled') ?>" class="hover:underline">← Previous: Controlled Forms</a>
  <a href="<?= base_url('react/form-submit') ?>" class="hover:underline">Next: Form Submission →</a>
</div>

</main>
