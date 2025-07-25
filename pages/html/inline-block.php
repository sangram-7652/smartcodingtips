<?php
$title = "Inline vs Block | SmartCodingTips";
$description = "Learn about inline vs block in HTML. Understand key concepts, examples, and usage.";
$keywords = "inline, vs, block, html tutorial, html basics";
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
            <li class="text-gray-500">Inline vs Block</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Inline vs Block Elements</h1>
        <p class=" mb-4">
            In HTML, elements are categorized as either <strong>inline</strong> or <strong>block-level</strong> based on their default display behavior in the document flow.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Block-Level Elements</h2>
            <p class=" mb-2">
                Block-level elements take up the full width available, starting on a new line. They are typically used for structural layout.
            </p>
            <ul class="list-disc list-inside ">
                <li><code>&lt;div&gt;</code></li>
                <li><code>&lt;p&gt;</code></li>
                <li><code>&lt;h1&gt; to &lt;h6&gt;</code></li>
                <li><code>&lt;ul&gt;, &lt;ol&gt;, &lt;li&gt;</code></li>
                <li><code>&lt;section&gt;</code>, <code>&lt;article&gt;</code>, <code>&lt;header&gt;</code>, <code>&lt;footer&gt;</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Inline Elements</h2>
            <p class=" mb-2">
                Inline elements do not start on a new line and only take up as much width as necessary. They are typically used for formatting text.
            </p>
            <ul class="list-disc list-inside ">
                <li><code>&lt;span&gt;</code></li>
                <li><code>&lt;a&gt;</code></li>
                <li><code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code></li>
                <li><code>&lt;img&gt;</code></li>
                <li><code>&lt;br&gt;</code>, <code>&lt;input&gt;</code>, <code>&lt;label&gt;</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Visual Example</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;!-- Block Element --&gt;
&lt;div&gt;
  &lt;p&gt;This is a paragraph.&lt;/p&gt;
  &lt;p&gt;This is another paragraph.&lt;/p&gt;
&lt;/div&gt;

&lt;!-- Inline Element --&gt;
&lt;p&gt;This is an &lt;span&gt;inline&lt;/span&gt; element.&lt;/p&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/entities') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: HTML Entities</a>
    <a href="<?= base_url('html/dom-basics') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: HTML DOM →</a>
</div>
    </article>
</main>
