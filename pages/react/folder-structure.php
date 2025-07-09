<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/basics" class="text-blue-600 hover:underline dark:text-blue-400">Basics</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">Folder Structure</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">📁 Recommended React Folder Structure</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    A clean and organized folder structure makes your React projects easier to manage, scale, and collaborate on. Here’s a recommended layout for most mid-sized apps.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Overview -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Typical Folder Layout</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto mb-6"><code>
my-app/
├── public/
│   └── index.html
├── src/
│   ├── assets/        # Images, icons, fonts, etc.
│   ├── components/    # Reusable UI components
│   ├── pages/         # Route-level pages
│   ├── layouts/       # Shared page wrappers
│   ├── hooks/         # Custom hooks
│   ├── context/       # React Context providers
│   ├── services/      # API functions or utilities
│   ├── styles/        # Global or modular styles
│   ├── App.jsx
│   └── main.jsx       # (or index.js)
├── .env
├── package.json
└── README.md
</code></pre>

  <!-- Breakdown -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 Folder Breakdown</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6 space-y-2">
    <li><strong>assets/</strong> – Images, icons, logos</li>
    <li><strong>components/</strong> – Reusable buttons, cards, modals, etc.</li>
    <li><strong>pages/</strong> – Route-level views like Home, About, BlogDetail</li>
    <li><strong>layouts/</strong> – Wrappers like Navbar/Footer or AuthLayout</li>
    <li><strong>hooks/</strong> – Custom hooks like <code>useDarkMode()</code></li>
    <li><strong>context/</strong> – React Contexts like Auth, Theme, Cart</li>
    <li><strong>services/</strong> – API clients (Axios, fetch wrappers)</li>
    <li><strong>styles/</strong> – Tailwind config, global.css, or CSS Modules</li>
  </ul>

  <!-- Tips -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">✅ Best Practices</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Keep components small and focused</li>
    <li>Split files by feature not just type (feature-based structure)</li>
    <li>Use index.js inside folders for easier imports</li>
    <li>Name files and folders consistently (camelCase or kebab-case)</li>
  </ul>

  <!-- Optional -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Optional Advanced Structure</h2>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white overflow-x-auto"><code>
src/
├── features/
│   └── blog/
│       ├── BlogList.jsx
│       ├── BlogDetail.jsx
│       ├── blogSlice.js
│       └── blogAPI.js
</code></pre>

  <!-- Next Page Navigation -->
  <div class="mt-10 flex justify-end text-sm">
    <a href="react.php?page=react/create-app" class="text-blue-600 hover:underline dark:text-blue-400">
      Next: Create React App →
    </a>
  </div>

</main>
