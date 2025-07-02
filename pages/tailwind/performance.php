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
            <li class="text-gray-500">Performance and SEO Tips</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Performance and SEO Tips for Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Optimizing your Tailwind-powered site for performance and search engine visibility ensures fast load times, better rankings, and a great user experience.
        </p>

        <!-- Purge Unused CSS -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Purge Unused CSS</h2>
            <p class="text-lg mb-2">
                Tailwind includes a built-in purge mechanism to remove unused styles in production. Configure this in your <code>tailwind.config.js</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  content: ['./src/**/*.{html,js,php}'],
  theme: {
    extend: {},
  },
  plugins: [],
};
            </code></pre>
            <p class="text-lg">This dramatically reduces your CSS file size.</p>
        </section>

        <!-- Lazy Load Images -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Lazy Load Images</h2>
            <p class="text-lg">
                Use the <code>loading="lazy"</code> attribute on images to defer off-screen image loading:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;img src="hero.jpg" alt="Hero" loading="lazy" class="w-full h-auto"&gt;
            </code></pre>
        </section>

        <!-- Use CDN for Production Builds -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Use CDN or Minified Builds</h2>
            <p class="text-lg">
                If you’re using Tailwind via CDN, use the production-optimized version or self-host a minified output using the CLI build process.
            </p>
        </section>

        <!-- Meta Tags & Semantic HTML -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Add Meta Tags and Use Semantic HTML</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always include <code>&lt;title&gt;</code> and meta description</li>
                <li>Use <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, and <code>&lt;footer&gt;</code> tags appropriately</li>
                <li>Use heading hierarchy: <code>&lt;h1&gt;</code> followed by <code>&lt;h2&gt;</code>, etc.</li>
            </ul>
        </section>

        <!-- Minify HTML and Enable Compression -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Minify HTML and Enable Gzip/Brotli</h2>
            <p class="text-lg">
                Use build tools to compress HTML, CSS, and JS. Enable Gzip or Brotli compression on your server to reduce transfer size.
            </p>
        </section>

        <!-- Lighthouse & Auditing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Run Performance Audits</h2>
            <p class="text-lg">
                Use tools like <a href="https://pagespeed.web.dev" target="_blank" class="text-blue-600 hover:underline">Google Lighthouse</a> or <code>npm run audit</code> to test for:
            </p>
            <ul class="list-disc list-inside text-lg">
                <li>Unused CSS</li>
                <li>Accessibility issues</li>
                <li>SEO metadata checks</li>
                <li>Mobile responsiveness</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Combining Tailwind’s utility-first approach with SEO-friendly structure and performance tweaks can produce high-ranking, fast-loading websites that are accessible and beautiful.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/what-is-tailwind" class="text-blue-600 hover:underline">Back to Start →</a></p>
        </div>
    </article>
</main>
