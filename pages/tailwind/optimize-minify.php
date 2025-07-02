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
            <li class="text-gray-500">Minifying with PostCSS</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Minifying Tailwind CSS with PostCSS</h1>
        <p class="text-lg mb-4">
            PostCSS is a tool that processes your CSS and can be configured to include Tailwind and automatically minify your final output for production. This reduces file size and improves performance.
        </p>

        <!-- Setup -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Setting Up PostCSS</h2>
            <p class="text-lg mb-2">Install PostCSS, Tailwind, and Autoprefixer using npm:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
            </code></pre>
            <p class="text-lg mt-2">This creates both a <code>tailwind.config.js</code> and <code>postcss.config.js</code> file.</p>
        </section>

        <!-- PostCSS Config -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Configure <code>postcss.config.js</code></h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  plugins: {
    tailwindcss: {},
    autoprefixer: {},
  },
};
            </code></pre>
            <p class="text-lg mt-2">Autoprefixer ensures browser compatibility by adding vendor prefixes.</p>
        </section>

        <!-- Build Command -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Build and Minify</h2>
            <p class="text-lg mb-2">Run the Tailwind CLI with <code>--minify</code> to minify the CSS:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
npx tailwindcss -i ./src/input.css -o ./dist/output.css --minify
            </code></pre>
            <p class="text-lg mt-2">This creates a compact production-ready CSS file.</p>
        </section>

        <!-- Example Structure -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Typical Project Structure</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
├── src/
│   └── input.css     ← @tailwind base/components/utilities
├── dist/
│   └── output.css    ← Minified CSS here
├── postcss.config.js
├── tailwind.config.js
            </code></pre>
        </section>

        <!-- Optional Plugins -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Optional Enhancements</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Add <code>cssnano</code> for advanced minification</li>
                <li>Use <code>vite</code> or <code>webpack</code> for automatic builds</li>
                <li>Include <code>safelist</code> in Tailwind config for dynamic classes</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Minifying Tailwind CSS with PostCSS is essential for production readiness. With just a few commands, you can drastically reduce CSS file size and boost performance.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/optimize-bloat" class="text-blue-600 hover:underline">Avoiding Class Bloat →</a></p>
        </div>
    </article>
</main>
