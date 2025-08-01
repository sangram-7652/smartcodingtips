<?php
$title = "Creating Tables | SmartCodingTips";
$description = "Learn about creating tables in HTML. Understand key concepts, examples, and usage.";
$keywords = "creating, tables, html tutorial, html basics";
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
            <li class="text-gray-500">Creating Tables</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Creating Tables in HTML</h1>
        <p class=" mb-4">
            Tables are used to display data in a structured format of rows and columns. HTML provides several tags to build tables and format them as needed.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Table Structure</h2>
            <p class="mb-2">Here's a simple table with 3 rows and 2 columns:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Age&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Alice&lt;/td&gt;
    &lt;td&gt;24&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Bob&lt;/td&gt;
    &lt;td&gt;30&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Table Elements</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>&lt;table&gt;</code>: Defines the table container.</li>
                <li><code>&lt;tr&gt;</code>: Defines a row in the table.</li>
                <li><code>&lt;th&gt;</code>: Defines a table header cell (bold and centered by default).</li>
                <li><code>&lt;td&gt;</code>: Defines a standard table data cell.</li>
                <li><code>border</code>: Attribute to set table border (better done with CSS).</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Table with Caption</h2>
            <p class="mb-2">You can add a caption to describe the table:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;caption&gt;Employee List&lt;/caption&gt;
  &lt;tr&gt;
    &lt;th&gt;Name&lt;/th&gt;
    &lt;th&gt;Department&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;John&lt;/td&gt;
    &lt;td&gt;HR&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Merging Cells</h2>
            <p class="mb-2">You can merge rows or columns using <code>rowspan</code> and <code>colspan</code>:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th colspan="2"&gt;Employee&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Name&lt;/td&gt;
    &lt;td&gt;Jane&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Styling with CSS</h2>
            <p class="mb-2">Use CSS for better control and appearance:</p>
            <pre class="bg-gray-100 p-4 overflow-x-auto  rounded  dark:bg-gray-800 dark:text-white"><code class="text-sm">
table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  border: 1px solid #ccc;
  padding: 8px;
  text-align: left;
}

th {
  background-color: #f5f5f5;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>&lt;caption&gt;</code> to describe the purpose of the table.</li>
                <li>Use <code>&lt;th&gt;</code> for headers and scope attributes if needed.</li>
                <li>Keep table structure simple for screen readers.</li>
            </ul>
        </section>

         <div class="mt-6 flex justify-between items-center flex-wrap gap-10 text-sm font-semibold">
    <a href="<?= base_url('html/ol-ul-dl') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Types of Lists</a>
    <a href="<?= base_url('html/table-style') ?>" class="text-blue-600 dark:text-blue-400 hover:underline ms-auto">Next: Table Styling →</a>
</div>

    </article>
</main>
