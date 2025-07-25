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
            <li class="text-gray-500">Flexbox Basics</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Flexbox Basics</h1>
        <p class=" mb-4">
            Flexbox (Flexible Box Layout) is a powerful layout model in CSS that allows items to align, distribute, and adapt within a container, even when their sizes are unknown or dynamic.
        </p>

        <!-- Flex Container -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Creating a Flex Container</h2>
            <p class=" mb-2">To enable Flexbox, set the container’s <code>display</code> property to <code>flex</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    display: flex;
}
            </code></pre>
        </section>

        <!-- Flex Direction -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Flex Direction</h2>
            <p class=" mb-2">Defines the main axis direction (<code>row</code> by default):</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    flex-direction: row;         /* horizontal (default) */
    flex-direction: column;      /* vertical */
}
            </code></pre>
        </section>

        <!-- Justify Content -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Justify Content</h2>
            <p class=" mb-2">Aligns items along the main axis (horizontal in <code>row</code>):</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    justify-content: flex-start;    /* default */
    justify-content: center;
    justify-content: space-between;
    justify-content: space-around;
    justify-content: space-evenly;
}
            </code></pre>
        </section>

        <!-- Align Items -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Align Items</h2>
            <p class=" mb-2">Aligns items along the cross axis (vertical by default):</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    align-items: stretch;      /* default */
    align-items: center;
    align-items: flex-start;
    align-items: flex-end;
    align-items: baseline;
}
            </code></pre>
        </section>

        <!-- Flex Wrap -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Flex Wrap</h2>
            <p class=" mb-2">Controls whether items wrap to the next line if necessary:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    flex-wrap: nowrap;     /* default */
    flex-wrap: wrap;
    flex-wrap: wrap-reverse;
}
            </code></pre>
        </section>

        <!-- Gap -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Gap Between Items</h2>
            <p class=" mb-2">Use <code>gap</code> to control spacing between items:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.flex-container {
    display: flex;
    gap: 20px;
}
            </code></pre>
        </section>

        <!-- Responsive Layouts -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. Responsive Flex Layout</h2>
            <p class=" mb-2">Flexbox makes it easier to build layouts that adapt to screen size:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
@media (min-width: 768px) {
    .flex-container {
        flex-direction: row;
    }
}

@media (max-width: 767px) {
    .flex-container {
        flex-direction: column;
    }
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Flexbox provides an efficient way to layout, align, and distribute space among items in a container — especially when the size of the items is unknown or dynamic. It’s a core tool for modern responsive web design.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/breakpoints') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Breakpoints</a> 
   <a href="<?= base_url('css/flexbox-align') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Aligning Items →</a> 
</div>

    </article>
</main>
