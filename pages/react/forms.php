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
      <li class="text-black dark:text-gray-400">Forms</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📝 Handling Forms in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Forms are essential for collecting user input. In React, form elements like inputs, checkboxes, and selects can be handled using state and event handlers to build dynamic and interactive forms.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Controlled Form Example -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Controlled Form Example</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    A controlled component is tied to the component’s state. Every change updates the state in real-time.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function MyForm() {
  const [name, setName] = React.useState("");

  const handleSubmit = (e) => {
    e.preventDefault();
    alert("Name submitted: " + name);
  };

  return (
    &lt;form onSubmit={handleSubmit}&gt;
      &lt;label&gt;
        Name:
        &lt;input 
          type="text" 
          value={name} 
          onChange={(e) =&gt; setName(e.target.value)} 
        /&gt;
      &lt;/label&gt;
      &lt;button type="submit"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    The value of the input is controlled by the React state variable <code>name</code>.
  </p>

  <!-- Other Form Elements -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔘 Handling Checkboxes, Radio Buttons, and Select</h2>

  <p class="mb-4 text-black dark:text-gray-300">
    Each input type can be managed with state and <code>onChange</code> handlers.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function Preferences() {
  const [selectedOption, setSelectedOption] = React.useState("light");
  const [acceptTerms, setAcceptTerms] = React.useState(false);

  return (
    &lt;form&gt;
      &lt;label&gt;
        Theme:
        &lt;select value={selectedOption} onChange={(e) =&gt; setSelectedOption(e.target.value)}&gt;
          &lt;option value="light"&gt;Light&lt;/option&gt;
          &lt;option value="dark"&gt;Dark&lt;/option&gt;
        &lt;/select&gt;
      &lt;/label&gt;

      &lt;label&gt;
        &lt;input 
          type="checkbox" 
          checked={acceptTerms} 
          onChange={(e) =&gt; setAcceptTerms(e.target.checked)} 
        /&gt;
        I accept the terms
      &lt;/label&gt;
    &lt;/form&gt;
  );
}
</code></pre>

  <p class="mb-6 text-black dark:text-gray-300">
    Form handling in React provides real-time data management and better control over form validation and submission.
  </p>

  <!-- Best Practices -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Best Practices</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>Use controlled components for full control over input values</li>
    <li>Group form state logically (e.g., using objects for related fields)</li>
    <li>Prevent default form submissions with <code>e.preventDefault()</code></li>
    <li>Validate input on the fly or on submit</li>
  </ul>

  <!-- Next Link -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/controlled-vs-uncontrolled" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: Controlled vs Uncontrolled →
    </a>
  </div>

</main>
