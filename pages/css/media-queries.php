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
            <li class="text-gray-500">Media Queries</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Media Queries</h1>
        <p class=" mb-4">
            Media queries allow you to apply different CSS rules depending on the device's screen size, orientation, resolution, and more. They’re the foundation of responsive web design.
        </p>

        <!-- Basic Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Syntax</h2>
            <p class=" mb-2">A simple media query that targets devices with a max width of 600px:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@media (max-width: 600px) {
    body {
        background-color: lightgray;
    }
}
            </code></pre>
        </section>

        <!-- Common Use Cases -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Common Use Cases</h2>
            <ul class="list-disc list-inside  mb-2">
                <li>Adjust layout for phones, tablets, and desktops</li>
                <li>Hide/show elements based on screen size</li>
                <li>Change font sizes or paddings</li>
            </ul>
        </section>

        <!-- Breakpoints -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Common Breakpoints</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* Smartphones */
@media (max-width: 480px) { ... }

/* Tablets */
@media (min-width: 481px) and (max-width: 768px) { ... }

/* Small Laptops */
@media (min-width: 769px) and (max-width: 1024px) { ... }

/* Desktops */
@media (min-width: 1025px) { ... }
            </code></pre>
        </section>

        <!-- Orientation Queries -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Orientation Queries</h2>
            <p class=" mb-2">Apply styles based on screen orientation:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@media (orientation: landscape) {
    .gallery {
        flex-direction: row;
    }
}
            </code></pre>
        </section>

        <!-- Combining Conditions -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Combining Conditions</h2>
            <p class=" mb-2">You can combine multiple media features:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
@media (min-width: 768px) and (orientation: portrait) {
    .sidebar {
        display: none;
    }
}
            </code></pre>
        </section>

        <!-- Responsive Design Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Responsive Design Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Start with a mobile-first approach using <code>min-width</code>.</li>
                <li>Use relative units like <code>em</code>, <code>%</code>, or <code>rem</code>.</li>
                <li>Test on real devices and various screen sizes.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Media queries are a crucial part of modern CSS, allowing your website to adapt to any device or screen size. Mastering them is essential for building fully responsive, mobile-friendly websites.
            </p>
        </section>

     <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/transforms') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: 2D & 3D Transforms</a></div>
    <div><a href="<?= base_url('css/mobile-first') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Mobile-First Design →</a></div>
</div>

    </article>
</main>
