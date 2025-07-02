<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/setup" class="text-blue-600 hover:underline dark:text-blue-400">React Setup</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center text-black dark:text-gray-400">Your First React App</li>
    </ol>
  </nav>

  <!-- Title -->
  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🚀 Your First React App</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Now that you’ve set up React, let’s build your very first app — a simple "Hello, React!" component.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Directory Overview -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📁 Project Structure</h2>
  <p class="mb-4 text-black dark:text-gray-300">If you used <code>Create React App</code> or <code>Vite</code>, you’ll see a structure like this:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm overflow-x-auto text-black dark:text-white">
my-app/
├── public/
├── src/
│   ├── App.jsx
│   ├── main.jsx
│   └── index.css
├── package.json
</pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Creating Component -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 Creating a Component</h2>
  <p class="mb-4 text-black dark:text-gray-300">
    Open <code>App.jsx</code> and replace the content with a simple React component:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white">
import React from 'react';

function App() {
  return (
    &lt;div&gt;
      &lt;h1&gt;Hello, React!&lt;/h1&gt;
    &lt;/div&gt;
  );
}

export default App;
</pre>

  <!-- Render Entry -->
  <p class="mt-4 mb-6 text-black dark:text-gray-300">
    In <code>main.jsx</code> (or <code>index.js</code>), React renders the App:
  </p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white">
import React from 'react';
import ReactDOM from 'react-dom/client';
import App from './App';

const root = ReactDOM.createRoot(document.getElementById('root'));
root.render(&lt;App /&gt;);
</pre>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Run the App -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💻 Run the App</h2>
  <p class="mb-4 text-black dark:text-gray-300">In your terminal, start the development server:</p>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white">
npm run dev
</pre>

  <p class="mt-4 text-black dark:text-gray-300">Visit <code>http://localhost:5173</code> (Vite) or <code>http://localhost:3000</code> (CRA) to see your app running!</p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Recap -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Recap</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300">
    <li>You created a React component</li>
    <li>You rendered it to the DOM</li>
    <li>You started the app using a dev server</li>
  </ul>

  <!-- Next Link -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/components" class="text-blue-600 dark:text-blue-400 hover:underline">
      Next: Components in React →
    </a>
  </div>

</main>
