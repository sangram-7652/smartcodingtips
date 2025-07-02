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
            <li class="text-gray-500">Typography, Aspect-Ratio, Line-Clamp</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Typography, Aspect-Ratio, and Line-Clamp Plugins</h1>
        <p class="text-lg mb-4">
            Tailwind CSS offers official plugins that extend its core functionality. Among the most popular are the Typography, Aspect-Ratio, and Line-Clamp plugins — each of which makes handling common layout and content formatting needs easier and more efficient.
        </p>

        <!-- Typography Plugin -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">1. Typography Plugin (`@tailwindcss/typography`)</h2>
            <p class="text-lg mb-2">
                Also known as "prose classes," this plugin provides beautiful default styles for long-form content such as articles, blog posts, and documentation.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>// Installation
npm install -D @tailwindcss/typography

// In tailwind.config.js
plugins: [
    require('@tailwindcss/typography'),
]</code></pre>
            <p class="text-lg mt-4">Usage example:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>&lt;article class="prose lg:prose-xl"&gt;
    &lt;h1&gt;Tailwind Typography Plugin&lt;/h1&gt;
    &lt;p&gt;This is a paragraph styled with prose classes.&lt;/p&gt;
&lt;/article&gt;
</code></pre>
        </section>

        <!-- Aspect-Ratio Plugin -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">2. Aspect-Ratio Plugin</h2>
            <p class="text-lg mb-2">
                Ensures consistent width-to-height ratios (like 16:9, 4:3) for videos, images, and containers.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>// Installation
npm install -D @tailwindcss/aspect-ratio

// In tailwind.config.js
plugins: [
    require('@tailwindcss/aspect-ratio'),
]</code></pre>
            <p class="text-lg mt-4">Usage example:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>&lt;div class="aspect-w-16 aspect-h-9"&gt;
    &lt;iframe src="https://www.youtube.com/embed/xyz" frameborder="0"&gt;&lt;/iframe&gt;
&lt;/div&gt;
</code></pre>
        </section>

        <!-- Line-Clamp Plugin -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">3. Line-Clamp Plugin</h2>
            <p class="text-lg mb-2">
                Allows you to truncate text after a fixed number of lines and append an ellipsis (`...`) when overflowed.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>// Installation
npm install -D @tailwindcss/line-clamp

// In tailwind.config.js
plugins: [
    require('@tailwindcss/line-clamp'),
]</code></pre>
            <p class="text-lg mt-4">Usage example:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>&lt;p class="line-clamp-3"&gt;
  This is a very long paragraph that will be truncated after three lines using the line-clamp utility class.
&lt;/p&gt;
</code></pre>
        </section>

        <!-- Final Tips -->
        <section class="mb-10">
            <h2 class="text-2xl font-semibold mb-4">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use the Typography plugin to style static content consistently and beautifully.</li>
                <li>Combine Aspect-Ratio with responsive breakpoints for embedded media.</li>
                <li>Use Line-Clamp for blog titles, previews, and UI elements with dynamic content.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                These plugins are official, production-ready solutions that help tackle common design challenges. Add them to your project to save time and create beautiful, responsive UIs.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/plugin-ui" class="text-blue-600 hover:underline">Tailwind UI vs Headless UI →</a></p>
        </div>
    </article>
</main>
