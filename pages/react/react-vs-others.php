<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">

  <!-- Breadcrumb -->
  <nav aria-label="breadcrumb" class="text-sm text-black dark:text-gray-300 mb-4">
    <ol class="list-none p-0 inline-flex">
      <li class="flex items-center">
        <a href="index.php" class="text-blue-600 hover:underline dark:text-blue-400">Home</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center">
        <a href="react.php?page=react/intro" class="text-blue-600 hover:underline dark:text-blue-400">Introduction</a>
        <span class="mx-2">/</span>
      </li>
      <li class="flex items-center text-black dark:text-gray-400">React vs Other Frameworks</li>
    </ol>
  </nav>

  <h1 class="text-3xl font-bold mb-4 text-black dark:text-white">⚔️ React vs Vanilla JS / Angular / Vue</h1>

  <p class="mb-6 text-black dark:text-gray-300">
    Choosing the right tool is crucial. Here's how React compares to Vanilla JS, Angular, and Vue — the most common front-end approaches developers face.
  </p>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🪶 React vs Vanilla JavaScript</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li><strong>Vanilla JS</strong> offers full control, but lacks structure and requires manual DOM manipulation.</li>
    <li><strong>React</strong> introduces reusable components, JSX, and a virtual DOM for faster updates and cleaner logic.</li>
    <li>React is more scalable, especially for medium to large projects.</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧱 React vs Angular</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li><strong>Angular</strong> is a full-fledged MVC framework with everything built-in (routing, state, forms, etc.).</li>
    <li><strong>React</strong> is a library focused on the view layer, offering flexibility and a smaller bundle size.</li>
    <li>Angular uses TypeScript by default. React supports both JS and TS.</li>
    <li>React has a gentler learning curve and is easier to integrate into existing projects.</li>
  </ul>

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">🧩 React vs Vue</h2>
  <ul class="list-disc list-inside mb-6 text-black dark:text-gray-300">
    <li><strong>Vue</strong> is a progressive framework that’s beginner-friendly and great for small-to-medium apps.</li>
    <li><strong>React</strong> has a larger ecosystem and more enterprise adoption.</li>
    <li>Vue’s templating syntax is HTML-based, while React uses JSX.</li>
    <li>Both offer great performance and component-based structure.</li>
  </ul>

  <hr class="my-6 border-gray-300 dark:border-gray-700">

  <h2 class="text-2xl font-semibold mb-4 text-black dark:text-white">📋 Comparison Table</h2>
  <div class="overflow-x-auto text-sm mb-6">
    <table class="min-w-full text-left border dark:border-gray-600">
      <thead class="bg-gray-200 dark:bg-gray-700">
        <tr>
          <th class="py-2 px-4 font-medium text-black dark:text-white">Feature</th>
          <th class="py-2 px-4 font-medium text-black dark:text-white">React</th>
          <th class="py-2 px-4 font-medium text-black dark:text-white">Angular</th>
          <th class="py-2 px-4 font-medium text-black dark:text-white">Vue</th>
        </tr>
      </thead>
      <tbody class="bg-white dark:bg-gray-800 text-black dark:text-gray-200">
        <tr>
          <td class="border px-4 py-2">Type</td>
          <td class="border px-4 py-2">Library</td>
          <td class="border px-4 py-2">Framework</td>
          <td class="border px-4 py-2">Framework</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Size (Core)</td>
          <td class="border px-4 py-2">~42 KB</td>
          <td class="border px-4 py-2">~500 KB</td>
          <td class="border px-4 py-2">~33 KB</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Learning Curve</td>
          <td class="border px-4 py-2">Medium</td>
          <td class="border px-4 py-2">Steep</td>
          <td class="border px-4 py-2">Easy</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Language</td>
          <td class="border px-4 py-2">JSX / JavaScript</td>
          <td class="border px-4 py-2">TypeScript</td>
          <td class="border px-4 py-2">HTML + JS</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Use Cases</td>
          <td class="border px-4 py-2">SPAs, Web Apps</td>
          <td class="border px-4 py-2">Enterprise Apps</td>
          <td class="border px-4 py-2">Progressive Sites</td>
        </tr>
      </tbody>
    </table>
  </div>

  <p class="text-black dark:text-gray-300">
    All three are capable tools. Your choice depends on project size, team familiarity, and tooling preferences. React gives you flexibility, control, and performance — making it a top pick for modern web apps.
  </p>

  <!-- Next Page Navigation -->
<div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('react/why-react') ?>" class="hover:underline">← Previous: Why Use React?</a>
  <a href="<?= base_url('react/setup') ?>" class="hover:underline">Next: Setting Up React →</a>
</div>
</main>
