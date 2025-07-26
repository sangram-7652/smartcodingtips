<?php
$title = "Text Alignment & Decoration in CSS | SmartCodingTips";
$description = "Use CSS to align and decorate text with properties like text-align, text-decoration, and more.";
$keywords = "text alignment css, text decoration css, underline, center text, css text style";
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
            <li class="text-gray-500">Text Alignment & Decoration</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Text Alignment & Decoration in CSS</h1>
        <p class=" mb-4">
            CSS provides properties to align text and add decorative styles like underlines, overlines, and strike-throughs. These help enhance the structure and readability of your content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Text Alignment</h2>
            <p class=" mb-2">
                The <code>text-align</code> property controls horizontal alignment of text within a container.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p.left {
    text-align: left;
}

p.center {
    text-align: center;
}

p.right {
    text-align: right;
}

p.justify {
    text-align: justify;
}
            </code></pre>
            <p class=" mt-2">
                Use <code>justify</code> for newspaper-style block text that aligns on both sides.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Text Decoration</h2>
            <p class=" mb-2">
                The <code>text-decoration</code> property is used to underline, overline, strike-through, or remove decoration from text.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
a {
    text-decoration: none;
}

h2 {
    text-decoration: underline;
}

p.marked {
    text-decoration: line-through;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Text Decoration Shorthand</h2>
            <p class=" mb-2">
                The shorthand version allows you to specify style, color, and type together:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
a.custom-link {
    text-decoration: underline dotted red;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Text Transform</h2>
            <p class=" mb-2">
                Change the capitalization of text using <code>text-transform</code>.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
.upper {
    text-transform: uppercase;
}

.lower {
    text-transform: lowercase;
}

.capitalize {
    text-transform: capitalize;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Text alignment and decoration are essential for content structure and visual appeal. Use these properties to guide your users’ attention and create readable, elegant layouts.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
            <a href="<?= base_url('css/text-spacing') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Line & Letter Spacing</a>
            <a href="<?= base_url('css/color-systems') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Hex, RGB, HSL →</a>
        </div>
    </article>
</main>