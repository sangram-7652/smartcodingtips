<?php
$title = "Columns with Div | SmartCodingTips";
$description = "Learn about columns with div in HTML. Understand key concepts, examples, and usage.";
$keywords = "columns, with, div, html tutorial, html basics";
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
            <li class="text-gray-500">Columns with Div</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Creating Columns with &lt;div&gt; in HTML</h1>
        <p class=" mb-4">
            Creating columns using the <code>&lt;div&gt;</code> element is a common layout technique in web design. With CSS, you can easily make side-by-side columns for content layout.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Two Column Layout (Using Flexbox)</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;style&gt;
  .row {
    display: flex;
  }
  .column {
    flex: 1;
    padding: 20px;
    border: 1px solid #ccc;
  }
&lt;/style&gt;

&lt;div class="row"&gt;
  &lt;div class="column"&gt;
    &lt;h2&gt;Column 1&lt;/h2&gt;
    &lt;p&gt;This is the first column.&lt;/p&gt;
  &lt;/div&gt;
  &lt;div class="column"&gt;
    &lt;h2&gt;Column 2&lt;/h2&gt;
    &lt;p&gt;This is the second column.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Three Column Layout Example</h2>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;style&gt;
  .three-columns {
    display: flex;
    gap: 20px;
  }
  .three-columns .column {
    flex: 1;
    padding: 10px;
    background-color: #f3f3f3;
    border-radius: 8px;
  }
&lt;/style&gt;

&lt;div class="three-columns"&gt;
  &lt;div class="column"&gt;Column 1&lt;/div&gt;
  &lt;div class="column"&gt;Column 2&lt;/div&gt;
  &lt;div class="column"&gt;Column 3&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>flexbox</code> for responsive and easy column layouts.</li>
                <li>Add <code>gap</code> or <code>margin</code> between columns for spacing.</li>
                <li>Set <code>flex: 1</code> on each column to make them equal width.</li>
                <li>Use media queries to stack columns on smaller screens.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/div-vs-section') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Div vs Section</a>
    <a href="<?= base_url('html/flexbox-layout') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Flexbox Layout →</a>
</div>
    </article>
</main>
