<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">PostCSS, Vite Integration</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Integration with PostCSS and Vite</h1>
        <p class=" mb-4">
            Tailwind CSS works seamlessly with modern tools like PostCSS and Vite. This guide shows you how to configure Tailwind with both, enabling fast builds and powerful utility-based styling.
        </p>

        <!-- What is PostCSS? -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">1. What is PostCSS?</h2>
            <p class="">
                PostCSS is a CSS processor that transforms your CSS with JavaScript plugins. Tailwind uses PostCSS under the hood for features like <code>@tailwind</code>, <code>@apply</code>, and automatic purging.
            </p>
        </section>

        <!-- Vite + Tailwind Setup -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">2. Setting Up Tailwind with Vite</h2>
            <p class=" mb-2">Vite is a modern frontend tool that offers fast dev servers and instant HMR. Here’s how to integrate Tailwind:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
// 1. Initialize Vite project
npm create vite@latest my-app
cd my-app
npm install

// 2. Install Tailwind, PostCSS & Autoprefixer
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p

// 3. Configure tailwind.config.js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./index.html", "./src/**/*.{js,ts,jsx,tsx}"],
  theme: {
    extend: {},
  },
  plugins: [],
}

// 4. Create src/index.css and add:
@tailwind base;
@tailwind components;
@tailwind utilities;

// 5. Import it in main.js
import './index.css';
            </code></pre>
        </section>

        <!-- Using PostCSS Separately -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">3. Using Tailwind with PostCSS (without Vite)</h2>
            <p class="">If you use Webpack or another bundler, configure a <code>postcss.config.js</code> like:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
// postcss.config.js
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-2">4. Tips & Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always purge unused styles in production for minimal file sizes.</li>
                <li>Keep Tailwind config clean with aliases, themes, and plugin arrays.</li>
                <li>Use <code>@apply</code> only for grouping a few classes; avoid overuse.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Integrating Tailwind with Vite or PostCSS allows you to enjoy a fast development experience and scalable styling. It’s one of the best setups for modern frontend workflows.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">End of Section. Back to <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind Topics</a></p>
        </div>
    </article>
</main>
