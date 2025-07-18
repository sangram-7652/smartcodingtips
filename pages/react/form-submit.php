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
      <li class="flex items-center">Form Submission</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📤 Form Submission in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Submitting a form in React involves handling the submit event, collecting form values, and processing or sending them to a server. React's controlled components make this easy and flexible.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📝 1. Handle Form Submission</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Use the <code>onSubmit</code> event handler on the <code>&lt;form&gt;</code> tag:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
import { useState } from 'react';

function ContactForm() {
  const [name, setName] = useState('');

  const handleSubmit = (e) => {
    e.preventDefault(); // prevent page reload
    alert(`Form submitted: ${name}`);
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;input 
        type="text" 
        value={name} 
        onChange={(e) =&gt; setName(e.target.value)} 
        placeholder="Your Name"
      /&gt;
      &lt;button type="submit"&gt;Send&lt;/button&gt;
    &lt;/form&gt;
  );
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔐 2. Prevent Default Behavior</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    By default, form submission reloads the page. Use <code>e.preventDefault()</code> to stop this and handle it manually in React.
  </p>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Send Data to a Server</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    You can send form data to an API using <code>fetch()</code> or <code>axios</code> inside the <code>handleSubmit()</code>:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
fetch('/api/submit', {
  method: 'POST',
  headers: { 'Content-Type': 'application/json' },
  body: JSON.stringify({ name })
})
.then(res =&gt; res.json())
.then(data =&gt; console.log(data));
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 4. Clear Form After Submit</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Reset the state after a successful submission:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
setName('');
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <p class="text-black dark:text-gray-300">
    With React, you have full control over what happens on form submission — whether it’s validation, API calls, or UI updates.
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/validations') ?>" class="hover:underline">← Previous: Input Validation</a>
  <a href="<?= base_url('react/form-libraries') ?>" class="hover:underline">Next: Formik / RHF / Yup →</a>
</div>

</main>
