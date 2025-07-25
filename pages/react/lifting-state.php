<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state" class="text-blue-600 dark:text-blue-400 hover:underline">State</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Lifting State Up</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📤 Lifting State Up</h1>

  <p class="mb-6 text-black dark:text-white">
    When multiple components need to share and synchronize state, it’s often best to **move the state up** to their closest common ancestor — a pattern known as <strong>Lifting State Up</strong>.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🎯 Why Lift State?</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Coordinate data between sibling components</li>
    <li>Keep a single source of truth</li>
    <li>Make data flow predictable and easier to debug</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Example Scenario</h2>
  <p class="text-black dark:text-white mb-4">
    Imagine two components: one updates a value, and the other displays it. Instead of storing state in both, you lift it up to a parent.
  </p>

  <pre class="bg-gray-100 dark:bg-gray-800 p-4 rounded text-sm overflow-x-auto text-black dark:text-white mb-6"><code>// Parent Component
function Parent() {
  const [count, setCount] = React.useState(0);
  return (
    &lt;&gt;
      &lt;Counter value={count} /&gt;
      &lt;Increment onClick={() =&gt; setCount(count + 1)} /&gt;
    &lt;/&gt;
  );
}

function Counter({ value }) {
  return &lt;p&gt;Count: {value}&lt;/p&gt;;
}

function Increment({ onClick }) {
  return &lt;button onClick={onClick}&gt;+1&lt;/button&gt;;
}
</code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Benefits</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Ensures consistent state across components</li>
    <li>Improves control and maintainability</li>
    <li>Makes debugging easier with a single source of truth</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Summary</h2>
  <ul class="list-disc list-inside text-black dark:text-white mb-4">
    <li>Shared state should live in the nearest common parent</li>
    <li>Child components communicate via props and callbacks</li>
    <li>Lifting state up helps avoid data duplication</li>
  </ul>

  <!-- Next Page Navigation -->
 <div class="mt-4 flex justify-between items-center flex-wrap gap-4 text-blue-600 dark:text-blue-400  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/prop-drilling') ?>" class="hover:underline">← Previous: Props Drilling</a>
  <a href="<?= base_url('react/callback-props') ?>" class="hover:underline ms-auto">Next: Callback Props →</a>
</div>

</main>
