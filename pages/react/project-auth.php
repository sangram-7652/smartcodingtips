<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/projects" class="text-blue-600 hover:underline dark:text-blue-400">Projects</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Login Form</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🔐 Login Form in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A login form is a common UI component used to authenticate users. This example includes controlled inputs, basic validation, and a simulated login function.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Step 1 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 1. Build the Login Form</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import { useState } from 'react';

function LoginForm() {
  const [email, setEmail] = useState('');
  const [password, setPassword] = useState('');
  const [error, setError] = useState('');
  const [success, setSuccess] = useState(false);

  const handleSubmit = (e) => {
    e.preventDefault();
    setError('');
    setSuccess(false);

    if (!email || !password) {
      setError('All fields are required');
      return;
    }

    // Simulate API check
    if (email === 'admin@example.com' && password === 'admin123') {
      setSuccess(true);
    } else {
      setError('Invalid credentials');
    }
  };

  return (
    &lt;form
      onSubmit={handleSubmit}
      className="max-w-md mx-auto bg-white dark:bg-gray-800 p-6 rounded shadow space-y-4"
    &gt;
      &lt;h2 className="text-2xl font-bold mb-4 text-center text-black dark:text-white"&gt;Login&lt;/h2&gt;

      &lt;input
        type="email"
        placeholder="Email"
        value={email}
        onChange={(e) =&gt; setEmail(e.target.value)}
        className="w-full px-4 py-2 border rounded dark:bg-gray-700 dark:text-white"
      /&gt;

      &lt;input
        type="password"
        placeholder="Password"
        value={password}
        onChange={(e) =&gt; setPassword(e.target.value)}
        className="w-full px-4 py-2 border rounded dark:bg-gray-700 dark:text-white"
      /&gt;

      {error &amp;&amp; &lt;p className="text-red-500"&gt;{error}&lt;/p&gt;}
      {success &amp;&amp; &lt;p className="text-green-500"&gt;Login successful!&lt;/p&gt;}

      &lt;button
        type="submit"
        className="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700"
      &gt;
        Login
      &lt;/button&gt;
    &lt;/form&gt;
  );
}

export default LoginForm;
</code></pre>

  <!-- Step 2 -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🚀 2. Use in App</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
import LoginForm from './LoginForm';

function App() {
  return (
    &lt;main className="min-h-screen flex items-center justify-center bg-gray-100 dark:bg-gray-800"&gt;
      &lt;LoginForm /&gt;
    &lt;/main&gt;
  );
}

export default App;
</code></pre>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Uses <code>useState</code> for form handling</li>
    <li>Includes basic validation and error/success feedback</li>
    <li>Simulates credential checking (can be replaced with real API)</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/project-todo') ?>" class="hover:underline">← Previous: Todo List</a>
  <a href="<?= base_url('react/project-blog') ?>" class="hover:underline ms-auto">Next: Blog App →</a>
</div>

</main>
