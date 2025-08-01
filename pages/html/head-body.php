<?php
$title = "Head & Body | SmartCodingTips";
$description = "Learn about head & body in HTML. Understand key concepts, examples, and usage.";
$keywords = "head, body, html tutorial, html basics";
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
            <li class="text-gray-500">Head &amp; Body</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Head &amp; Body in HTML</h1>
        <p class=" mb-4">
            In an HTML document, the <code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> elements are two essential building blocks. They organize the page into metadata and visible content, respectively.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">The Head Element</h2>
            <p class=" mb-2">
                The <code>&lt;head&gt;</code> section contains metadata and instructions for the browser, such as the page title, character encoding, stylesheets, and scripts.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;head&gt;
  &lt;meta charset="UTF-8"&gt;
  &lt;title&gt;My Page&lt;/title&gt;
  &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">The Body Element</h2>
            <p class=" mb-2">
                The <code>&lt;body&gt;</code> section holds all the content that users see in the browser window, such as text, images, links, and buttons.
            </p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;body&gt;
  &lt;h1&gt;Welcome to My Website&lt;/h1&gt;
  &lt;p&gt;This is the main content of the page.&lt;/p&gt;
&lt;/body&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why They Matter</h2>
            <ul class="list-disc list-inside ">
                <li><code>&lt;head&gt;</code> provides important data to the browser and search engines.</li>
                <li><code>&lt;body&gt;</code> delivers the actual content to the user.</li>
                <li>Separating logic from content improves clarity and maintainability.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                The <code>&lt;head&gt;</code> and <code>&lt;body&gt;</code> tags are fundamental to every HTML document. The head defines behind-the-scenes settings, while the body displays content to the user.
            </p>
        </section>

         <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/doctype') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Doctype Declaration</a>
    <a href="<?= base_url('html/comments') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Comments in HTML →</a>
</div>
    </article>
</main>
