<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/forms" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Handling Submissions</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚀 Handling Form Submissions in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Submitting a form in React is straightforward using the <code>onSubmit</code> event. Typically, we prevent the browser’s default behavior and use state to access form values.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Basic Form Submission -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📨 Basic Example</h2>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function ContactForm() {
  const [email, setEmail] = React.useState("");

  const handleSubmit = (e) => {
    e.preventDefault(); // Prevents page reload
    console.log("Form submitted:", email);
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;label&gt;
        Email:
        &lt;input 
          type="email" 
          value={email} 
          onChange={(e) =&gt; setEmail(e.target.value)} 
        /&gt;
      &lt;/label&gt;
      &lt;button type="submit"&gt;Send&lt;/button&gt;
    &lt;/form&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    The <code>handleSubmit</code> function captures the form data without refreshing the page.
  </p>

  <!-- Submitting Multiple Fields -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧾 Submitting Multiple Fields</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function SignupForm() {
  const [form, setForm] = React.useState({ username: "", password: "" });

  const handleChange = (e) => {
    setForm({ ...form, [e.target.name]: e.target.value });
  };

  const handleSubmit = (e) => {
    e.preventDefault();
    console.log("User Data:", form);
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;input 
        name="username" 
        value={form.username} 
        onChange={handleChange} 
        placeholder="Username" 
      /&gt;
      &lt;input 
        name="password" 
        type="password" 
        value={form.password} 
        onChange={handleChange} 
        placeholder="Password" 
      /&gt;
      &lt;button type="submit"&gt;Sign Up&lt;/button&gt;
    &lt;/form&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Using a single <code>handleChange</code> function makes it easier to manage multiple inputs.
  </p>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💡 Tips for Handling Submissions</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Always use <code>e.preventDefault()</code> to stop default form behavior.</li>
    <li>Perform validation before submission (client or server side).</li>
    <li>Use state to access and manage form inputs.</li>
    <li>Use loading indicators and error messages for better UX.</li>
  </ul>

  <!-- Next Link -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/forms') ?>" class="hover:underline">← Previous: Forms</a>
  <a href="<?= base_url('react/refs') ?>" class="hover:underline ms-auto">Next: Refs with useRef() →</a>
</div>
</main>
