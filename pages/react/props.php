<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600 hover:underline dark:text-blue-400">React</a>
        <span class="mx-2">/</span>
      </li>
      <li class="text-black dark:text-gray-400">Props</li>
    </ol>
  </nav>

  <!-- Page Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📬 React Props</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    <strong>Props</strong> (short for "properties") are used to pass data from one component to another, especially from parent to child. They are read-only and help make components reusable and dynamic.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- How Props Work -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🔗 How Props Work</h2>
  <p class="text-black dark:text-gray-300 mb-4">
    Props are passed like HTML attributes and accessed using the <code>props</code> object in function parameters.
  </p>

  <h3 class="text-xl font-semibold mb-2 text-black dark:text-white">Example:</h3>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function Greeting(props) {
  return &lt;h1&gt;Hello, {props.name}!&lt;/h1&gt;;
}

function App() {
  return &lt;Greeting name="Sangram" /&gt;;
}
</pre>

  <p class="text-black dark:text-gray-300 mb-6">In this example, <code>name="Sangram"</code> is a prop passed to the <code>Greeting</code> component.</p>

  <!-- Destructuring Props -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✂️ Destructuring Props</h2>
  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
function Greeting({ name }) {
  return &lt;h1&gt;Hello, {name}!&lt;/h1&gt;;
}
</pre>
  <p class="text-black dark:text-gray-300 mb-6">This is a cleaner way to access props, using object destructuring.</p>

  <!-- Props Table -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Common Props Use Cases</h2>
  <div class="overflow-x-auto text-sm mb-6">
    <table class="min-w-full text-left border dark:border-gray-600">
      <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
          <th class="py-2 px-4 font-medium dark:text-white">Prop</th>
          <th class="py-2 px-4 font-medium dark:text-white">Example Value</th>
          <th class="py-2 px-4 font-medium dark:text-white">Purpose</th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-gray-800 text-gray-800 dark:text-gray-200">
        <tr>
          <td class="border px-4 py-2">name</td>
          <td class="border px-4 py-2">"John"</td>
          <td class="border px-4 py-2">Display dynamic text</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">style</td>
          <td class="border px-4 py-2">{{ color: "red" }}</td>
          <td class="border px-4 py-2">Pass custom styling</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">onClick</td>
          <td class="border px-4 py-2">{handleClick}</td>
          <td class="border px-4 py-2">Pass event handler function</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Important Notes -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📌 Important Points</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Props are <strong>read-only</strong>. You cannot change them inside the child component.</li>
    <li>Props allow <strong>component reuse</strong> with different data.</li>
    <li>Props can be <strong>strings, numbers, arrays, objects, or functions</strong>.</li>
  </ul>

  <!-- Summary -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>Used to pass data between components</li>
    <li>Accessed via <code>props</code> or destructuring</li>
    <li>Essential for dynamic and reusable UIs</li>
  </ul>

  <!-- Next Page Navigation -->
<div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/components') ?>" class="hover:underline">← Previous: Components</a>
  <a href="<?= base_url('react/state') ?>" class="hover:underline ms-auto">Next: State →</a>
</div>

</main>
