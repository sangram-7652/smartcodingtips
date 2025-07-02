<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/state" class="text-blue-600 hover:underline">State</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Context API</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black">🌐 React Context API – Introduction</h1>

  <p class="mb-6 text-black">
    The <strong>Context API</strong> in React provides a way to pass data through the component tree without having to pass props manually at every level. It’s a clean solution to the problem of prop drilling in deeply nested components.
  </p>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">🔧 Why Use Context?</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>To share global data like theme, user info, or settings</li>
    <li>To avoid passing props through multiple layers</li>
    <li>To simplify state sharing between deeply nested components</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📦 When Should You Avoid It?</h2>
  <p class="text-black mb-4">
    Context is **not a replacement for all state management**. Avoid it when:
  </p>
  <ul class="list-disc list-inside text-black mb-4">
    <li>The data is not truly global</li>
    <li>You only need it within a few components</li>
    <li>You update the context too frequently (performance hit)</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">⚙️ How It Works (Overview)</h2>
  <p class="text-black mb-2">
    The Context API is made up of three parts:
  </p>
  <ul class="list-disc list-inside text-black mb-4">
    <li><strong>Context</strong>: Created using <code>React.createContext()</code></li>
    <li><strong>Provider</strong>: Makes the data available to child components</li>
    <li><strong>Consumer / useContext</strong>: Allows components to access that data</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">✅ Common Use Cases</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>🌙 Theme switching (light/dark)</li>
    <li>👤 User authentication and profile info</li>
    <li>📦 Language settings (i18n)</li>
    <li>🔧 Global app configuration</li>
  </ul>

  <hr class="my-6 border-gray-300">

  <h2 class="text-2xl font-semibold mb-4 text-black">📋 Summary</h2>
  <ul class="list-disc list-inside text-black mb-4">
    <li>Context lets you share state globally without prop drilling.</li>
    <li>Use when the same data is needed across many components.</li>
    <li>Avoid it for local or frequently updated state.</li>
  </ul>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/context-example" class="text-blue-600 hover:underline">
      Next: Context API Example →
    </a>
  </div>

</main>
