<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/props" class="text-blue-600 hover:underline">Props</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Props Drilling</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black">🔽 Props Drilling in React</h1>

  <p class="mb-6 text-black">
    Props drilling refers to the process of passing data from a parent component to a deeply nested child component through intermediate components, even if those intermediates don’t need the data.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📉 What is Props Drilling?</h2>
  <p class="mb-4 text-black">
    When data is needed in a component deep in the tree, but must be passed through several intermediary components that don't use it — that's called props drilling.
  </p>

  <pre class="bg-gray-100 p-4 rounded text-sm overflow-x-auto text-black mb-6"><code>// App → Parent → Child → Target
function App() {
  return &lt;Parent user="Sangram" /&gt;;
}

function Parent({ user }) {
  return &lt;Child user={user} /&gt;;
}

function Child({ user }) {
  return &lt;TargetComponent user={user} /&gt;;
}

function TargetComponent({ user }) {
  return &lt;p&gt;Hello, {user}&lt;/p&gt;;
}
</code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">⚠️ Why is it a Problem?</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>Clutters intermediary components with unused props.</li>
    <li>Makes refactoring and maintenance harder.</li>
    <li>Increases coupling between components.</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">🧠 Solutions to Avoid Props Drilling</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li><strong>React Context API:</strong> Share data globally without manually passing props.</li>
    <li><strong>State Management Tools:</strong> Redux, Zustand, or Jotai for global state control.</li>
    <li><strong>Custom Hooks:</strong> Encapsulate logic and share across components.</li>
  </ul>

  <pre class="bg-gray-100 p-4 rounded text-sm overflow-x-auto text-black mb-6"><code>// Using Context API
const UserContext = React.createContext();

function App() {
  return (
    &lt;UserContext.Provider value="Sangram"&gt;
      &lt;Parent /&gt;
    &lt;/UserContext.Provider&gt;
  );
}

function TargetComponent() {
  const user = React.useContext(UserContext);
  return &lt;p&gt;Hello, {user}&lt;/p&gt;;
}
</code></pre>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📋 Summary</h2>
  <ul class="list-disc list-inside text-black">
    <li>Props drilling happens when data is passed through components unnecessarily.</li>
    <li>It increases code complexity and reduces maintainability.</li>
    <li>Use Context API or global state to avoid this pattern.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/context-api" class="text-blue-600 hover:underline">
      Next: React Context API →
    </a>
  </div>

</main>
