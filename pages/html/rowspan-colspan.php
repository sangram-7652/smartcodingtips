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
            <li class="text-gray-500">Rowspan & Colspan</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Rowspan & Colspan</h1>
        <p class=" mb-4">
            In HTML tables, you can merge cells using the <code>rowspan</code> and <code>colspan</code> attributes. This helps in creating cleaner and more meaningful table layouts.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is <code>colspan</code>?</h2>
            <p class="mb-2">The <code>colspan</code> attribute allows a cell to span across multiple columns:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th colspan="2"&gt;Employee Details&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Name&lt;/td&gt;
    &lt;td&gt;Alice&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">What is <code>rowspan</code>?</h2>
            <p class="mb-2">The <code>rowspan</code> attribute allows a cell to span across multiple rows:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th rowspan="2"&gt;Name&lt;/th&gt;
    &lt;td&gt;Alice&lt;/td&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Bob&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Combined Example</h2>
            <p class="mb-2">Here’s an example combining both <code>rowspan</code> and <code>colspan</code>:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;table border="1"&gt;
  &lt;tr&gt;
    &lt;th rowspan="2"&gt;Department&lt;/th&gt;
    &lt;th colspan="2"&gt;Employees&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Alice&lt;/td&gt;
    &lt;td&gt;Bob&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Use <code>rowspan</code> and <code>colspan</code> to group similar data for better readability.</li>
                <li>Keep table layout simple and clear.</li>
                <li>Combine with CSS to maintain alignment and spacing.</li>
            </ul>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/table-style') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Table Styling</a></div>
    <div><a href="<?= base_url('html/forms') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Form Tag →</a></div>
</div>
    </article>
</main>
