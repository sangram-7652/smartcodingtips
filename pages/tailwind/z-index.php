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
            <li class="text-gray-500">z-Index Layers</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">z-Index Utilities in Tailwind CSS</h1>
        <p class="text-lg mb-4">
            Tailwind provides <code>z-index</code> utilities to control the stacking order of elements. These are helpful when layering modals, dropdowns, tooltips, and other overlapping elements.
        </p>

        <!-- Default Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Default z-Index Classes</h2>
            <p class="text-lg mb-2">Tailwind includes several built-in <code>z-*</code> utilities:</p>
            <ul class="list-disc list-inside text-lg">
                <li><code>z-0</code> – Sets <code>z-index: 0;</code></li>
                <li><code>z-10</code>, <code>z-20</code>, <code>z-30</code>, <code>z-40</code>, <code>z-50</code></li>
                <li><code>z-auto</code> – Removes z-index and lets browser decide stacking</li>
            </ul>
        </section>

        <!-- Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Example: Overlapping Cards</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
&lt;div class="relative"&gt;
  &lt;div class="absolute left-4 top-4 w-32 h-32 bg-blue-300 z-10"&gt;Box A&lt;/div&gt;
  &lt;div class="absolute left-8 top-8 w-32 h-32 bg-red-300 z-20"&gt;Box B&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
            <p class="text-lg mt-2">Box B (z-20) will appear above Box A (z-10).</p>
        </section>

        <!-- Custom z-index -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Custom z-Index in Config</h2>
            <p class="text-lg mb-2">
                You can add custom z-index values in <code>tailwind.config.js</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm"><code>
module.exports = {
  theme: {
    extend: {
      zIndex: {
        '60': '60',
        '999': '999',
        'modal': '1050'
      }
    }
  }
}
            </code></pre>
        </section>

        <!-- Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Tips & Gotchas</h2>
            <ul class="list-disc list-inside text-lg">
                <li><strong>Positioning required:</strong> An element must be positioned (e.g., <code>relative</code>, <code>absolute</code>) for <code>z-index</code> to apply.</li>
                <li>Higher <code>z-*</code> values appear in front of lower ones.</li>
                <li>Use <code>z-auto</code> when you want to reset stacking behavior.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Tailwind’s <code>z-index</code> utilities make it easy to layer content and control element stacking without writing custom CSS. Combine with positioning and opacity for elegant layered interfaces.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/transform" class="text-blue-600 hover:underline">Transform & Scale →</a></p>
        </div>
    </article>
</main>
