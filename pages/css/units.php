<?php
$title = "CSS Units: px, %, em, rem | SmartCodingTips";
$description = "Learn various CSS units of measurement and how to use px, %, em, rem effectively.";
$keywords = "css units, px em rem, css measurement, responsive css units, css layout tips";
?>

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
            <li class="text-gray-500">CSS Units</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Units: px, %, em, rem</h1>
        <p class=" mb-4">
            CSS uses different types of units to define sizes, spacing, and layout. Understanding units like <code>px</code>, <code>%</code>, <code>em</code>, and <code>rem</code> helps you create flexible and responsive designs.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Pixels (<code>px</code>)</h2>
            <p class=" mb-2">
                A pixel is a fixed unit and doesn’t scale. It's great for precise control but not ideal for responsiveness.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p {
    font-size: 16px;
    margin: 10px;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Percentages (<code>%</code>)</h2>
            <p class=" mb-2">
                Percentages are relative to the parent element’s size.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.container {
    width: 80%;
}

img {
    width: 100%;
}
            </code></pre>
            <p class=" mt-2">
                Use percentages for fluid layouts that adapt to different screen sizes.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. <code>em</code> Units</h2>
            <p class=" mb-2">
                <code>em</code> is relative to the font-size of the current element or its parent.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
div {
    font-size: 16px;
}

p {
    font-size: 1.5em; /* 24px if parent is 16px */
}
            </code></pre>
            <p class=" mt-2">
                <code>em</code> can compound, so use with care when nesting elements.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. <code>rem</code> Units</h2>
            <p class=" mb-2">
                <code>rem</code> is relative to the root element’s (<code>html</code>) font-size. It's consistent across all elements regardless of nesting.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
html {
    font-size: 16px;
}

h1 {
    font-size: 2rem; /* 32px */
}
            </code></pre>
            <p class=" mt-2">
                <code>rem</code> is ideal for scalable and predictable sizing.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Which One to Use?</h2>
            <ul class="list-disc list-inside ">
                <li><strong>px</strong>: Precise, but not responsive.</li>
                <li><strong>%</strong>: Best for fluid, responsive layouts.</li>
                <li><strong>em</strong>: Useful for scalable spacing, but can be tricky with nesting.</li>
                <li><strong>rem</strong>: Preferred for font sizes and consistency across the page.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mastering CSS units is essential for creating responsive, accessible, and flexible designs. Use the right unit based on the layout and scaling behavior you want to achieve.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
            <a href="<?= base_url('css/color-systems') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Hex, RGB, HSL</a>
            <a href="<?= base_url('css/opacity-gradient') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Opacity & Gradients →</a>
        </div>
    </article>
</main>