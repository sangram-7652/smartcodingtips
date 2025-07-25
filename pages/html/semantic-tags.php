<?php
$title = "Semantic Tags | SmartCodingTips";
$description = "Learn about semantic tags in HTML. Understand key concepts, examples, and usage.";
$keywords = "semantic, tags, html tutorial, html basics";
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
            <li class="text-gray-500">Semantic Tags</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Semantic Tags in HTML</h1>
        <p class=" mb-4">
            Semantic tags clearly define the meaning of the content in HTML documents. They help search engines, screen readers, and developers understand the structure and content of a webpage.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What Are Semantic Tags?</h2>
            <p class=" mb-2">
                Semantic tags provide meaning to the web page content. Instead of using generic <code>&lt;div&gt;</code> or <code>&lt;span&gt;</code>, you can use tags like <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code>, <code>&lt;article&gt;</code>, and <code>&lt;section&gt;</code>.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Semantic Tags</h2>
            <ul class="list-disc list-inside ">
                <li><code>&lt;header&gt;</code> – Defines the header for a page or section.</li>
                <li><code>&lt;nav&gt;</code> – Defines navigation links.</li>
                <li><code>&lt;main&gt;</code> – Specifies the main content.</li>
                <li><code>&lt;section&gt;</code> – Defines a section in a document.</li>
                <li><code>&lt;article&gt;</code> – Defines independent content.</li>
                <li><code>&lt;aside&gt;</code> – Defines content aside from the main content.</li>
                <li><code>&lt;footer&gt;</code> – Defines the footer for a page or section.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Example Usage</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;article&gt;
    &lt;header&gt;
        &lt;h2&gt;News Title&lt;/h2&gt;
    &lt;/header&gt;
    &lt;p&gt;This is the news content.&lt;/p&gt;
    &lt;footer&gt;Written by Admin&lt;/footer&gt;
&lt;/article&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why Use Semantic Tags?</h2>
            <ul class="list-disc list-inside ">
                <li>Improves accessibility for screen readers.</li>
                <li>Enhances SEO by providing meaningful structure.</li>
                <li>Makes code easier to read and maintain.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Semantic tags make your HTML more meaningful, accessible, and SEO-friendly. Always prefer semantic tags over generic ones for better web development practices.
            </p>
        </section>

      <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/super-sub') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Superscript & Subscript</a>
    <a href="<?= base_url('html/quote-cite') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Quote & Citation →</a>
</div>
    </article>
</main>
