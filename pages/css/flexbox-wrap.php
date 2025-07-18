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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Wrapping & Direction</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Flexbox Wrapping & Direction</h1>
        <p class=" mb-4">
            Flexbox allows you to control the direction in which items flow and whether they wrap onto multiple lines. This flexibility makes it easier to build responsive layouts.
        </p>

        <!-- flex-direction -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. flex-direction</h2>
            <p class=" mb-2">The <code>flex-direction</code> property sets the direction of the main axis along which flex items are placed:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-container {
    display: flex;
    flex-direction: row;        /* default: left to right */
    flex-direction: row-reverse; /* right to left */
    flex-direction: column;     /* top to bottom */
    flex-direction: column-reverse; /* bottom to top */
}
            </code></pre>
        </section>

        <!-- flex-wrap -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. flex-wrap</h2>
            <p class=" mb-2">The <code>flex-wrap</code> property allows items to wrap onto multiple lines if needed:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-container {
    flex-wrap: nowrap;      /* default */
    flex-wrap: wrap;        /* wrap items to next line */
    flex-wrap: wrap-reverse;/* wrap in reverse order */
}
            </code></pre>
        </section>

        <!-- flex-flow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. flex-flow (Shorthand)</h2>
            <p class=" mb-2">The <code>flex-flow</code> shorthand combines <code>flex-direction</code> and <code>flex-wrap</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-container {
    flex-flow: row wrap;
}
            </code></pre>
        </section>

        <!-- Responsive Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Responsive Layout Example</h2>
            <p class=" mb-2">Allow content to wrap on smaller screens for better responsiveness:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-container {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
}
            </code></pre>
        </section>

        <!-- Visual Aid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Visual Summary</h2>
            <ul class="list-disc list-inside ">
                <li><code>row</code>: items in horizontal row (default)</li>
                <li><code>column</code>: items in vertical column</li>
                <li><code>wrap</code>: items move to new line as needed</li>
                <li><code>row-reverse</code> / <code>column-reverse</code>: items flow in reverse order</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding <code>flex-direction</code> and <code>flex-wrap</code> helps you create adaptable, fluid layouts that respond well to different screen sizes and content volumes.
            </p>
        </section>
<div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/flexbox-align') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Aligning Items</a></div>
    <div><a href="<?= base_url('css/flexbox-layouts') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Layout Patterns →</a></div>
</div>
    </article>
</main>
