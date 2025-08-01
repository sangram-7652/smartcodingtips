<?php
$title = "CSS Font Styles | SmartCodingTips";
$description = "Style your text with different fonts, weights, and styles using CSS. Includes font-family usage.";
$keywords = "css font style, font-family, font-weight, css typography, styling text in css";
?>

<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 dark:text-blue-400 dark:text-blue-400 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Font Styles</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Font Styles in CSS</h1>
        <p class=" mb-4">
            CSS provides powerful options for styling text. You can control font family, size, weight, style, line spacing, and more to improve readability and design.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Font Family</h2>
            <p class=" mb-2">
                Specifies the typeface to use. You can define multiple fonts as fallbacks.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Font Size</h2>
            <p class=" mb-2">
                Defines the size of the font using units like <code>px</code>, <code>em</code>, <code>rem</code>, or <code>%</code>.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p {
    font-size: 16px;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Font Weight</h2>
            <p class=" mb-2">
                Sets the boldness of the text.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
h1 {
    font-weight: bold;
}

strong {
    font-weight: 700;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Font Style</h2>
            <p class=" mb-2">
                Specifies whether the font is normal, italic, or oblique.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
em {
    font-style: italic;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Line Height</h2>
            <p class=" mb-2">
                Controls the vertical spacing between lines of text.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p {
    line-height: 1.6;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Shorthand: <code>font</code></h2>
            <p class=" mb-2">
                The <code>font</code> property can set all font-related properties in a single line.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto rounded dark:bg-gray-800 dark:text-white"><code class="text-sm">
p {
    font: italic small-caps 16px/1.5 'Arial', sans-serif;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Styling fonts properly enhances readability and design. Use combinations of size, weight, line height, and families to create a visually appealing and accessible user experience.
            </p>
        </section>

     <div class="mt-6 flex justify-between items-center flex-wrap gap-4 text-sm font-semibold">
   <a href="<?= base_url('css/dark-mode') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Dark Mode</a> 
   <a href="<?= base_url('css/form-layouts') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Form Layout →</a> 
</div>
    </article>
</main>
