<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="tailwind.php" class="text-blue-600 dark:text-blue-400 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Position Types</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Position Types in Tailwind CSS</h1>
        <p class=" mb-4">
            Tailwind CSS provides utility classes for setting the CSS <code>position</code> property, which determines how an element is positioned in the document flow.
        </p>

        <!-- Types of Position -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Types of Position</h2>
            <ul class="list-disc list-inside ">
                <li><code>static</code> – Default positioning</li>
                <li><code>relative</code> – Positioned relative to its normal position</li>
                <li><code>absolute</code> – Positioned relative to the nearest ancestor with positioning</li>
                <li><code>fixed</code> – Fixed to the viewport</li>
                <li><code>sticky</code> – Scrolls until a threshold, then sticks</li>
            </ul>
        </section>

        <!-- Utility Classes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Tailwind Utility Classes</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
.position-static   { position: static; }
.position-relative { position: relative; }
.position-absolute { position: absolute; }
.position-fixed    { position: fixed; }
.position-sticky   { position: sticky; }
            </code></pre>
        </section>

        <!-- Example: Absolute Positioning -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Example: Absolute Positioning</h2>
            <p class=" mb-2">This places an element inside a relatively positioned container:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="relative w-64 h-40 bg-gray-200"&gt;
    &lt;div class="absolute top-2 right-2 bg-blue-500 text-white px-2 py-1"&gt;
        Absolute Box
    &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- Example: Sticky Header -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Example: Sticky Header</h2>
            <p class=" mb-2">Sticky headers remain visible as you scroll:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white text-sm"><code>
&lt;div class="sticky top-0 bg-white shadow z-10"&gt;
    &lt;h1 class="text-xl font-bold p-4"&gt;Sticky Header&lt;/h1&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <!-- When to Use Each -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. When to Use Each Position Type</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Static:</strong> For most elements (default).</li>
                <li><strong>Relative:</strong> For offsetting elements slightly.</li>
                <li><strong>Absolute:</strong> For overlays inside containers.</li>
                <li><strong>Fixed:</strong> For elements like sticky navbars or modals.</li>
                <li><strong>Sticky:</strong> For scroll-linked headers, menus, etc.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding position types helps you control layout behavior and interactions. Combine these with spacing and z-index utilities for full control over stacking and flow.
            </p>
        </section>

        <div class="mt-4 flex justify-between text-blue-600 dark:text-blue-400 font-semibold">
  <a href="<?= base_url('tailwind/animations') ?>" class="hover:underline">← Previous: Animating with Keyframes</a>
  <a href="<?= base_url('tailwind/inset') ?>" class="hover:underline">Next: Top, Right, Bottom, Left Utilities →</a>
</div>
    </article>
</main>
