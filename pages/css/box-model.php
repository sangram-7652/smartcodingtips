<?php
$title = "CSS Box Model Explained | SmartCodingTips";
$description = "Understand the box model concept in CSS including content, padding, border, and margin.";
$keywords = "css box model, margin padding border, css layout, box sizing css";
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
            <li class="text-gray-500">Box Model Basics</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Box Model Basics</h1>
        <p class=" mb-4">
            The CSS box model is the foundation of layout and design in CSS. Every HTML element is a rectangular box made up of four parts: <strong>content</strong>, <strong>padding</strong>, <strong>border</strong>, and <strong>margin</strong>.
        </p>

        <!-- Box Model Diagram -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Parts of the Box Model</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Content</strong> – The actual text or image inside the box.</li>
                <li><strong>Padding</strong> – Clears space around the content, inside the border.</li>
                <li><strong>Border</strong> – A line that surrounds the padding (and content).</li>
                <li><strong>Margin</strong> – Clears space outside the border, between this element and others.</li>
            </ul>
        </section>

        <!-- Example Code -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Example of Box Model in Code</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    width: 200px;
    padding: 20px;
    border: 5px solid #4f46e5;
    margin: 15px;
}
            </code></pre>
            <p class=" mt-2">
                Total width = <code>width + padding + border + margin</code>. In this case: <code>200 + 40 + 10 + 30 = 280px</code>.
            </p>
        </section>

        <!-- Box Sizing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. box-sizing Property</h2>
            <p class=" mb-2">
                By default, <code>width</code> only includes content. To include padding and border inside the defined width, use <code>box-sizing: border-box</code>.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
* {
    box-sizing: border-box;
}
            </code></pre>
            <p class=" mt-2">
                This makes layouts more predictable and is a common best practice.
            </p>
        </section>

        <!-- Visual Understanding -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Visual Layout Summary</h2>
            <p class="">
                The layout layers from inside to outside:
            </p>
            <ul class="list-disc list-inside ">
                <li>Content</li>
                <li>Padding</li>
                <li>Border</li>
                <li>Margin</li>
            </ul>
            <p class=" mt-2">
                Each affects how elements are spaced and displayed on the page.
            </p>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding the box model is essential for mastering layouts in CSS. Proper use of padding, margin, and border ensures clean, responsive, and well-aligned designs.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
            <a href="<?= base_url('css/variables') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: CSS Variables</a>
            <a href="<?= base_url('css/margin-padding') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Margin & Padding →</a>
        </div>

    </article>
</main>