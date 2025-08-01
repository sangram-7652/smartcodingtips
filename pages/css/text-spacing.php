<?php
$title = "Line & Letter Spacing in CSS | SmartCodingTips";
$description = "Control spacing between lines and letters using CSS properties like line-height and letter-spacing.";
$keywords = "css spacing, line height, letter spacing, word spacing, css typography";
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
            <li class="text-gray-500">Line & Letter Spacing</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Line & Letter Spacing in CSS</h1>
        <p class=" mb-4">
            CSS provides properties to control the space between lines and characters. Proper spacing improves readability and aesthetics of your content.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Line Height</h2>
            <p class=" mb-2">
                The <code>line-height</code> property sets the vertical spacing between lines of text.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p {
    line-height: 1.6;
}
            </code></pre>
            <p class=" mt-2">
                You can use unitless values (recommended), or fixed units like <code>px</code> or <code>em</code>.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Letter Spacing</h2>
            <p class=" mb-2">
                The <code>letter-spacing</code> property adjusts the space between characters.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
h1 {
    letter-spacing: 2px;
}
            </code></pre>
            <p class=" mt-2">
                You can use positive values to spread characters or negative values to bring them closer.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Word Spacing</h2>
            <p class=" mb-2">
                The <code>word-spacing</code> property adds space between words.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p.intro {
    word-spacing: 5px;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Practical Example</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p.readable-text {
    font-size: 18px;
    line-height: 1.75;
    letter-spacing: 0.5px;
    word-spacing: 2px;
}
            </code></pre>
            <p class=" mt-2">
                This improves the overall readability of paragraph text.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Adjusting line height, letter spacing, and word spacing gives you finer control over typography and layout. Use these properties to create clean and readable text blocks.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/colors') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Text & Background Colors</a> 
   <a href="<?= base_url('css/text-decoration') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Alignment & Decoration →</a> 
</div>
    </article>
</main>
