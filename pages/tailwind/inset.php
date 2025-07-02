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
            <li class="text-gray-500">Inset Utilities</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Inset Utilities (Top, Right, Bottom, Left)</h1>
        <p class="text-lg mb-4">
            Tailwind's inset utilities allow you to control the position of absolutely or relatively positioned elements using <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> properties.
        </p>

        <!-- Basic Inset Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Inset Utility Classes</h2>
            <p class="text-lg mb-2">Tailwind provides both combined and directional inset classes:</p>
            <ul class="list-disc list-inside text-lg">
                <li><code>inset-0</code> – Sets <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> to <code>0</code></li>
                <li><code>top-4</code>, <code>right-2</code>, <code>bottom-8</code>, <code>left-1</code> – Set values independently</li>
                <li><code>inset-x-4</code> – Sets <code>left</code> and <code>right</code> together</li>
                <li><code>inset-y-2</code> – Sets <code>top</code> and <code>bottom</code> together</li>
            </ul>
        </section>

        <!-- Example Usage -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Example: Inset with Absolute Positioning</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="relative w-64 h-32 bg-gray-200"&gt;
    &lt;div class="absolute top-2 right-2 bg-blue-500 text-white px-3 py-1 rounded"&gt;
        Top Right Box
    &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Full Coverage Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Full Coverage (Inset 0)</h2>
            <p class="text-lg mb-2">Using <code>inset-0</code> can make an element stretch fully over its parent:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="relative w-64 h-32 bg-gray-300"&gt;
    &lt;div class="absolute inset-0 bg-black opacity-30"&gt;&lt;/div&gt;
    &lt;p class="relative z-10 text-white p-4"&gt;Overlay Content&lt;/p&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Custom Values -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Custom Values</h2>
            <p class="text-lg mb-2">
                You can extend the theme in <code>tailwind.config.js</code> to include custom spacing values:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  theme: {
    extend: {
      inset: {
        '1/2': '50%',
        'full': '100%',
        'n-4': '-1rem',
      }
    }
  }
}
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Tips & Notes</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Inset utilities only work on elements with <code>relative</code>, <code>absolute</code>, <code>fixed</code>, or <code>sticky</code> position.</li>
                <li>Combine with <code>z-index</code> and background colors for overlays.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Inset utilities in Tailwind make it easy to control placement without writing custom CSS. Whether aligning a tooltip, overlay, or sticky header — these utilities save time and add flexibility.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/z-index" class="text-blue-600 hover:underline">z-Index Utilities →</a></p>
        </div>
    </article>
</main>
