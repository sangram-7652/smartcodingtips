<?php
$title = "Meta Tags | SmartCodingTips";
$description = "Learn about meta tags in HTML. Understand key concepts, examples, and usage.";
$keywords = "meta, tags, html tutorial, html basics";
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
            <li class="text-gray-500">Meta Tags</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Meta Tags in HTML</h1>
        <p class=" mb-4">
            Meta tags provide metadata about the HTML document. They are placed inside the <code>&lt;head&gt;</code> element and help search engines, browsers, and social media platforms understand your page better.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Meta Tags</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;meta charset="UTF-8"&gt;</code> – Sets the character encoding to UTF-8.</li>
                <li><code>&lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;</code> – Ensures responsive design on mobile devices.</li>
                <li><code>&lt;meta name="description" content="Short summary of your page"&gt;</code> – Describes your page for search engines.</li>
                <li><code>&lt;meta name="keywords" content="html, web, tutorial"&gt;</code> – Lists keywords for search indexing (less used now).</li>
                <li><code>&lt;meta name="author" content="Your Name"&gt;</code> – Specifies the author of the page.</li>
                <li><code>&lt;meta http-equiv="refresh" content="30"&gt;</code> – Refreshes the page every 30 seconds (optional).</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;meta name="viewport" content="width=device-width, initial-scale=1.0"&gt;
  &lt;meta name="description" content="Learn about meta tags in HTML"&gt;
  &lt;meta name="keywords" content="HTML, meta tags, SEO"&gt;
  &lt;meta name="author" content="SmartCodingTips"&gt;
&lt;/head&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/heading-structure') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Heading Structure</a>
    <a href="<?= base_url('html/favicon') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Favicon →</a>
</div>
    </article>
</main>
