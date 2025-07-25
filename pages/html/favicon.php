<?php
$title = "Favicon | SmartCodingTips";
$description = "Learn about favicon in HTML. Understand key concepts, examples, and usage.";
$keywords = "favicon, html tutorial, html basics";
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
                <a href="html.php" class="text-blue-600 dark:text-blue-400 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Favicon</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Favicon in HTML</h1>
        <p class=" mb-4">
            A favicon is a small icon associated with a website, displayed in the browser tab, bookmarks, and other places. It helps improve branding and user recognition.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">How to Add a Favicon</h2>
            <p class="mb-2">
                Favicons are typically 16×16 or 32×32 pixel `.ico` or `.png` files. You can include them in your HTML using the <code>&lt;link&gt;</code> tag inside the <code>&lt;head&gt;</code> section.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;head&gt;
  &lt;link rel="icon" type="image/png" href="favicon.png"&gt;
&lt;/head&gt;
            </code></pre>
            <p class="mt-2">
                For better browser compatibility, you can include multiple formats or sizes:
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;link rel="icon" href="favicon.ico" type="image/x-icon"&gt;
&lt;link rel="shortcut icon" href="favicon.ico" type="image/x-icon"&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips</h2>
            <ul class="list-disc list-inside  mb-2">
                <li>Place the favicon file in the root or <code>/images/</code> directory.</li>
                <li>Clear your browser cache if changes are not visible.</li>
                <li>Use online favicon generators to create `.ico` files from images.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/meta-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Meta Tags</a>
    <a href="<?= base_url('html/deprecated-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Deprecated Tags →</a>
</div>
    </article>
</main>
