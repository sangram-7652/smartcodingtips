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
      <li class="flex items-center">Controlled Forms</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📝 Controlled Forms in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In React, a <strong>controlled form</strong> is a form where the form data is handled by the component’s state. This allows for easier validation, control, and logic based on user input.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎛️ 1. Basic Controlled Input</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Here's how to bind an input value to React state:
  </p>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
import { useState } from 'react';

function NameForm() {
  const [name, setName] = useState('');

  const handleChange = (e) => {
    setName(e.target.value);
  };

  return (
    &lt;div&gt;
      &lt;input type="text" value={name} onChange={handleChange} /&gt;
      &lt;p&gt;Hello, {name}&lt;/p&gt;
    &lt;/div&gt;
  );
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ 2. Why Use Controlled Inputs?</h2>
  <ul class="list-disc list-inside mb-4 text-black dark:text-gray-300">
    <li>Better control over user input</li>
    <li>Validation and formatting become easier</li>
    <li>Works well with conditional logic</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 3. Handle Multiple Inputs</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    You can manage multiple inputs by using one state object:
  </p>

  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
const [form, setForm] = useState({ name: '', email: '' });

function handleChange(e) {
  const { name, value } = e.target;
  setForm((prev) => ({ ...prev, [name]: value }));
}
  </code></pre>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 4. Submit the Form</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 text-black dark:text-white p-4 text-sm rounded overflow-x-auto mb-4"><code>
function handleSubmit(e) {
  e.preventDefault();
  console.log(form);
}
  </code></pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <p class="text-black dark:text-gray-300">
    Controlled components are the preferred method for managing form data in React, offering full control and predictability.
  </p>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/display-data') ?>" class="hover:underline">← Previous: Displaying Data</a>
  <a href="<?= base_url('react/validations') ?>" class="hover:underline ms-auto">Next: Input Validation →</a>
</div>

</main>
