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
            <li class="text-gray-500">Installing Tailwind Plugins</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Installing and Using Official Tailwind Plugins</h1>
        <p class="text-lg mb-4">
            Tailwind offers a number of official plugins that extend its capabilities, such as adding better typography, aspect ratios, forms, and line clamping. These plugins are easy to install and configure.
        </p>

        <!-- Install Plugins -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Installation Example</h2>
            <p class="text-lg mb-2">Install one or more plugins via npm:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
npm install @tailwindcss/forms @tailwindcss/typography @tailwindcss/aspect-ratio @tailwindcss/line-clamp
            </code></pre>
        </section>

        <!-- Configure Plugins -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. Add to tailwind.config.js</h2>
            <p class="text-lg mb-2">Update your <code>tailwind.config.js</code> file to use them:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  content: [
    "./index.html",
    "./src/**/*.{html,js,jsx,ts,tsx,vue}",
  ],
  theme: {
    extend: {},
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('@tailwindcss/typography'),
    require('@tailwindcss/aspect-ratio'),
    require('@tailwindcss/line-clamp'),
  ],
};
            </code></pre>
        </section>

        <!-- Plugin Examples -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Usage Examples</h2>
            <p class="text-lg font-semibold mt-4">📄 Typography Plugin:</p>
            <p class="text-lg">Wrap content in a <code>prose</code> class for elegant text formatting:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;article class="prose"&gt;
  &lt;h1&gt;Tailwind Typography Example&lt;/h1&gt;
  &lt;p&gt;This paragraph will look nice out of the box!&lt;/p&gt;
&lt;/article&gt;
            </code></pre>

            <p class="text-lg font-semibold mt-6">📷 Aspect-Ratio Plugin:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="aspect-w-16 aspect-h-9"&gt;
  &lt;iframe src="https://www.youtube.com/embed/..." frameborder="0" allowfullscreen&gt;&lt;/iframe&gt;
&lt;/div&gt;
            </code></pre>

            <p class="text-lg font-semibold mt-6">✅ Forms Plugin:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;input type="text" class="form-input" placeholder="Styled with Tailwind Forms"&gt;
            </code></pre>

            <p class="text-lg font-semibold mt-6">🔠 Line Clamp Plugin:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;p class="line-clamp-3"&gt;
  This paragraph will be truncated after three lines...
&lt;/p&gt;
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Install only the plugins you need to avoid bloat.</li>
                <li>Use <code>line-clamp</code> and <code>aspect-ratio</code> to maintain layout integrity.</li>
                <li>Customize plugin behavior in <code>tailwind.config.js</code> as needed.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind's official plugins extend functionality without adding complexity. They integrate cleanly into your existing setup and help you build more powerful, beautiful UIs efficiently.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/plugin-typography" class="text-blue-600 hover:underline">Typography Plugin →</a></p>
        </div>
    </article>
</main>
