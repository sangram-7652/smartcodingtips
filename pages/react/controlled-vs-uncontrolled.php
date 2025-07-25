<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/forms" class="text-blue-600 hover:underline dark:text-blue-400">Forms</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Controlled vs Uncontrolled</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🎛️ Controlled vs Uncontrolled Components</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    In React, form inputs can be either controlled or uncontrolled. Understanding the difference is key to building reliable and scalable forms.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Controlled Components -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Controlled Components</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Controlled components have their state fully managed by React. Input values are linked to state variables, and changes are handled through events.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function ControlledInput() {
  const [name, setName] = React.useState("");

  const handleChange = (e) =&gt; setName(e.target.value);

  return (
    &lt;input type="text" value={name} onChange={handleChange} /&gt;
  );
}
</code></pre>

  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>✅ React has full control of the value</li>
    <li>✅ Enables validation, conditional logic, etc.</li>
    <li>⚠️ Requires more code and state management</li>
  </ul>

  <!-- Uncontrolled Components -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🕹️ Uncontrolled Components</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Uncontrolled components rely on the DOM to manage their values using a <code>ref</code>. React doesn’t track the input's state directly.
  </p>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
function UncontrolledInput() {
  const inputRef = React.useRef();

  const handleSubmit = () =&gt; {
    alert("Input value: " + inputRef.current.value);
  };

  return (
    &lt;&gt;
      &lt;input type="text" ref={inputRef} /&gt;
      &lt;button onClick={handleSubmit}&gt;Submit&lt;/button&gt;
    &lt;/&gt;
  );
}
</code></pre>

  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li>✅ Less code, simpler in small forms</li>
    <li>⚠️ Harder to validate or manipulate programmatically</li>
    <li>⚠️ Doesn’t reflect state in React’s data flow</li>
  </ul>

  <!-- Comparison -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 When to Use Each</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li><strong>Use Controlled:</strong> When you need validation, conditional logic, or dynamic updates.</li>
    <li><strong>Use Uncontrolled:</strong> For simple forms or when integrating with non-React libraries.</li>
  </ul>

  <!-- Summary Table -->
  <div class="overflow-x-auto text-sm mb-6">
    <table class="min-w-full border dark:border-gray-600 text-black dark:text-white">
      <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
          <th class="px-4 py-2">Aspect</th>
          <th class="px-4 py-2">Controlled</th>
          <th class="px-4 py-2">Uncontrolled</th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-gray-800">
        <tr>
          <td class="border px-4 py-2">State</td>
          <td class="border px-4 py-2">Managed by React</td>
          <td class="border px-4 py-2">Managed by DOM</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Validation</td>
          <td class="border px-4 py-2">Easier</td>
          <td class="border px-4 py-2">Harder</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Code Complexity</td>
          <td class="border px-4 py-2">Higher</td>
          <td class="border px-4 py-2">Lower</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Refs Required</td>
          <td class="border px-4 py-2">No</td>
          <td class="border px-4 py-2">Yes</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Conclusion -->
  <p class="text-black dark:text-gray-300">
    Controlled components are the preferred approach in React apps due to their flexibility and integration with the React state model. Uncontrolled components can be useful in isolated, simple use cases.
  </p>

  <!-- Next Page -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/events') ?>" class="hover:underline">← Previous: Handling Events</a>
  <a href="<?= base_url('react/forms') ?>" class="hover:underline ms-auto">Next: Forms →</a>
</div>

</main>
