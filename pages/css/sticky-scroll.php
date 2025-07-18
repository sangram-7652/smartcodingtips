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
            <li class="text-gray-500">Sticky Scroll</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Sticky Scroll in CSS</h1>
        <p class=" mb-4">
            The <code>position: sticky;</code> property allows elements to stick to the top (or other edges) of the container as the user scrolls, without using JavaScript.
        </p>

        <!-- Basic Usage -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Sticky Example</h2>
            <p class=" mb-2">
                To make an element stick to the top of its parent when scrolling:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.sticky-header {
    position: sticky;
    top: 0;
    background: white;
    z-index: 1000;
}
            </code></pre>
            <p class=" mt-2">
                The element will scroll normally, but when it reaches the top of the viewport, it will stick.
            </p>
        </section>

        <!-- Important Notes -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Important Notes</h2>
            <ul class="list-disc list-inside ">
                <li>The parent container must have a height that causes scrolling.</li>
                <li>The sticky element will only stick **within** the boundaries of its parent container.</li>
                <li>Use <code>z-index</code> to keep it above other content when necessary.</li>
            </ul>
        </section>

        <!-- Horizontal Sticky -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Horizontal Sticky</h2>
            <p class=" mb-2">
                You can also make an element stick horizontally using <code>left</code> or <code>right</code>:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.sidebar {
    position: sticky;
    left: 0;
}
            </code></pre>
        </section>

        <!-- When to Use -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. When to Use</h2>
            <ul class="list-disc list-inside ">
                <li>Sticky headers and menus</li>
                <li>Sticky sidebars in documentation layouts</li>
                <li>Sticky table headers</li>
            </ul>
        </section>

        <!-- Browser Support -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Browser Support</h2>
            <p class="">
                <code>position: sticky</code> is widely supported in all modern browsers, but not in older versions of IE. Always test on your target devices.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Sticky positioning is a powerful tool for improving user experience in scrollable interfaces. Use it to keep important UI elements visible while maintaining natural scroll behavior.
            </p>
        </section>

       <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/calc-clamp') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: calc(), clamp()</a></div>
    <div><a href="<?= base_url('css/dark-mode') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Dark Mode →</a></div>
</div>

    </article>
</main>
