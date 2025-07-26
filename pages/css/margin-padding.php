<?php
$title = "CSS Margin & Padding | SmartCodingTips";
$description = "Learn how to control spacing around elements using margin and padding in CSS.";
$keywords = "css margin, css padding, spacing in css, css layout spacing";
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
            <li class="text-gray-500">Margin & Padding</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Margin & Padding in CSS</h1>
        <p class=" mb-4">
            <strong>Margin</strong> and <strong>padding</strong> are two key spacing properties in CSS. They control the space around and inside elements, and are essential for layout and design.
        </p>

        <!-- Margin -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Margin</h2>
            <p class=" mb-2">
                The <code>margin</code> property sets the outer space around an element. It pushes the element away from others.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.box {
    margin: 20px;
}
            </code></pre>
            <p class=" mt-2">
                You can set individual sides using:
            </p>
            <ul class="list-disc list-inside  mb-2">
                <li><code>margin-top</code></li>
                <li><code>margin-right</code></li>
                <li><code>margin-bottom</code></li>
                <li><code>margin-left</code></li>
            </ul>
            <p class="">
                Or use shorthand: <code>margin: 10px 15px 20px 25px;</code> (top, right, bottom, left)
            </p>
        </section>

        <!-- Padding -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Padding</h2>
            <p class=" mb-2">
                The <code>padding</code> property adds space inside the element, between the content and the border.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.card {
    padding: 16px;
}
            </code></pre>
            <p class=" mt-2">
                You can also target individual sides: <code>padding-top</code>, <code>padding-right</code>, etc.
            </p>
            <p class=" mt-2">
                Or use shorthand like <code>padding: 10px 20px;</code> for top-bottom and left-right.
            </p>
        </section>

        <!-- Margin Collapse -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Margin Collapse</h2>
            <p class=" mb-2">
                When vertical margins of two elements meet, the larger one remains and the smaller one collapses. This is called <strong>margin collapsing</strong>.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
h1 {
    margin-bottom: 20px;
}

p {
    margin-top: 10px;
}

/* Result: total margin between h1 and p is 20px, not 30px */
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use margin for spacing between elements.</li>
                <li>Use padding for spacing inside elements (around content).</li>
                <li>Consistent use of shorthand improves readability.</li>
                <li>Use <code>box-sizing: border-box</code> to make padding and border part of total width/height.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mastering margin and padding is crucial for creating clean and well-structured web layouts. Use them wisely to control spacing and improve design flow.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/box-model') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Box Model Basics</a> 
   <a href="<?= base_url('css/overflow-sizing') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Overflow & Box Sizing →</a> 
</div>

    </article>
</main>
