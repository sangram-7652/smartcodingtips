<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-gray-800 dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/ui-and-styling" class="text-blue-600 hover:underline dark:text-blue-400">UI & Styling</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">UI Libraries</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">🧰 Popular UI Libraries in React</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    UI libraries provide pre-built components to speed up development and ensure consistent design. React has a rich ecosystem of UI libraries that range from utility-first to fully styled design systems.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <!-- Section: Tailwind CSS -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">⚡ Tailwind CSS</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Utility-first CSS framework</li>
    <li>Fully customizable and responsive</li>
    <li>Works well with frameworks like Next.js and React</li>
  </ul>
  <p class="text-black dark:text-gray-300 mb-6">
    <strong>Popular Addons:</strong> Tailwind UI, Headless UI, daisyUI, shadcn/ui
  </p>

  <!-- Section: Material UI -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📦 Material UI (MUI)</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Google’s Material Design components for React</li>
    <li>Includes themes, accessibility, and dark mode support</li>
    <li>Large ecosystem of pre-made components</li>
  </ul>
  <pre class="bg-gray-100 dark:bg-gray-900 p-4 rounded text-sm text-black dark:text-white mb-6 overflow-x-auto"><code>
npm install @mui/material @emotion/react @emotion/styled
</code></pre>

  <!-- Section: Ant Design -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🏛️ Ant Design</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Enterprise-grade UI library by Alibaba</li>
    <li>Rich set of high-quality components</li>
    <li>Built-in internationalization (i18n)</li>
  </ul>

  <!-- Section: Chakra UI -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">💎 Chakra UI</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-4">
    <li>Accessible, themeable components</li>
    <li>Built with emotion and styled-system</li>
    <li>Flexible props-based styling API</li>
  </ul>

  <!-- Section: shadcn/ui -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 shadcn/ui</h2>
  <ul class="list-disc list-inside text-black dark:text-gray-300 mb-6">
    <li>Beautiful components built with Radix UI + Tailwind</li>
    <li>Copy-paste components with full customization</li>
    <li>Ideal for modern apps using Vite, Next.js, or React</li>
  </ul>

  <!-- Section: Comparison Table -->
  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📊 Comparison</h2>
  <div class="overflow-x-auto mb-6">
    <table class="w-full text-sm text-left border-collapse border border-gray-300 dark:border-gray-700">
      <thead class="bg-gray-100 dark:bg-gray-800 text-black dark:text-white">
        <tr>
          <th class="border px-4 py-2">Library</th>
          <th class="border px-4 py-2">Styling</th>
          <th class="border px-4 py-2">Customizable</th>
          <th class="border px-4 py-2">Best For</th>
        </tr>
      </thead>
      <tbody class="text-black dark:text-gray-300">
        <tr>
          <td class="border px-4 py-2">Tailwind CSS</td>
          <td class="border px-4 py-2">Utility classes</td>
          <td class="border px-4 py-2">⭐⭐⭐⭐⭐</td>
          <td class="border px-4 py-2">Custom UIs</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">MUI</td>
          <td class="border px-4 py-2">Component-based</td>
          <td class="border px-4 py-2">⭐⭐⭐</td>
          <td class="border px-4 py-2">Material Design apps</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Ant Design</td>
          <td class="border px-4 py-2">Component-based</td>
          <td class="border px-4 py-2">⭐⭐</td>
          <td class="border px-4 py-2">Admin dashboards</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Chakra UI</td>
          <td class="border px-4 py-2">Styled props</td>
          <td class="border px-4 py-2">⭐⭐⭐⭐</td>
          <td class="border px-4 py-2">Accessible UIs</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">shadcn/ui</td>
          <td class="border px-4 py-2">Tailwind + Radix</td>
          <td class="border px-4 py-2">⭐⭐⭐⭐⭐</td>
          <td class="border px-4 py-2">Modern apps</td>
        </tr>
      </tbody>
    </table>
  </div>

  <!-- Next Page Navigation -->
  <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/hoc') ?>" class="hover:underline">← Previous: HOC</a>
  <a href="<?= base_url('react/promises') ?>" class="hover:underline">Next: Promises & Async/Await →</a>
</div>
</main>
