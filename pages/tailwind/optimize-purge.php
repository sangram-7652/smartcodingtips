<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600  dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600  dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Purging Unused CSS</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Purging Unused CSS for Production</h1>
        <p class=" mb-4">
            Tailwind generates thousands of utility classes, which can make your final CSS file large. To optimize for production, you should remove unused styles using Tailwind’s built-in **PurgeCSS** (now integrated with Tailwind itself).
        </p>

        <!-- Why Purge? -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Why Should You Purge?</h2>
            <ul class="list-disc list-inside ">
                <li>Reduces file size drastically</li>
                <li>Improves website loading speed</li>
                <li>Better SEO and performance metrics</li>
            </ul>
        </section>

        <!-- Setup -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. How to Enable Purge in Tailwind</h2>
            <p class=" mb-2">In your <code>tailwind.config.js</code> file, set the `content` option like this:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  content: [
    './*.html',
    './src/**/*.{js,ts,jsx,tsx}',
    './components/**/*.php',
  ],
  theme: {
    extend: {},
  },
  plugins: [],
};
            </code></pre>
            <p class=" mt-2">This tells Tailwind to scan only those files for used class names.</p>
        </section>

        <!-- Build for Production -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Build CSS for Production</h2>
            <p class=" mb-2">Use the Tailwind CLI or your build tool (PostCSS, Laravel Mix, Vite, etc.):</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
npx tailwindcss -o build.css --minify
            </code></pre>
            <p class=" mt-2">The <code>--minify</code> flag ensures the CSS is purged and compressed.</p>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tips for Best Results</h2>
            <ul class="list-disc list-inside ">
                <li>Use actual class names, not dynamic strings.</li>
                <li>Avoid building classes via JS (like <code>"text-" + color</code>).</li>
                <li>If needed, use <code>safelist</code> in the config for dynamic classes.</li>
            </ul>
        </section>

        <!-- Safelist Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Safelisting Classes</h2>
            <p class=" mb-2">Add dynamic or conditionally-used classes manually like this:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
module.exports = {
  content: [...],
  safelist: [
    'text-red-500',
    'bg-green-100',
    /^bg-(red|green|blue)-(100|200|300)$/,
  ],
};
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                With Tailwind’s purge capabilities, you can safely use all the utility classes you need during development and enjoy a lean, performant CSS bundle in production.
            </p>
        </section>

       <div class="mt-4 flex justify-between text-blue-600  dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/project-dashboard') ?>" class="hover:underline">← Previous: Dark Mode Dashboard UI</a>
  <a href="<?= base_url('tailwind/optimize-minify') ?>" class="hover:underline">Next: Minifying with PostCSS →</a>
</div>

    </article>
</main>
