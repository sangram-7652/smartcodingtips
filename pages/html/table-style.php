<!-- Page Content Starts Here -->
<main class="content-area" style="padding: 20px; max-width: 950px; margin: auto;">
    <!-- Breadcrumb Navigation -->
    <nav aria-label="breadcrumb" class="text-sm text-gray-600 mb-4">
        <ol class="list-none p-0 inline-flex">
            <li class="flex items-center">
                <a href="index.php" class="text-blue-600 hover:underline">Home</a>
                <span class="mx-2">/</span>
            </li>
            <li class="flex items-center">
                <a href="html-tutorials.php" class="text-blue-600 hover:underline">HTML</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Table Styling</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Table Styling</h1>
        <p class="text-lg mb-4">
            By default, HTML tables are plain and lack design. You can enhance them using CSS to improve layout, readability, and user experience.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Default Table vs. Styled Table</h2>
            <p class="mb-2">Here's how a table looks without and with CSS styling:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;table&gt;
  &lt;tr&gt;
    &lt;th&gt;Product&lt;/th&gt;
    &lt;th&gt;Price&lt;/th&gt;
  &lt;/tr&gt;
  &lt;tr&gt;
    &lt;td&gt;Book&lt;/td&gt;
    &lt;td&gt;$10&lt;/td&gt;
  &lt;/tr&gt;
&lt;/table&gt;
            </code></pre>
            <p class="italic mt-2">Use CSS to enhance borders, spacing, and colors.</p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic CSS Table Styling</h2>
            <p class="mb-2">This example applies common styling rules to make tables more readable:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 12px;
  border: 1px solid #ccc;
  text-align: left;
}

th {
  background-color: #f3f4f6;
  color: #333;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Zebra Striping Rows</h2>
            <p class="mb-2">Alternating row colors improve readability:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
tr:nth-child(even) {
  background-color: #f9fafb;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Hover Effects</h2>
            <p class="mb-2">Highlight a row when the mouse hovers over it:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
tr:hover {
  background-color: #e5e7eb;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive Table Design</h2>
            <p class="mb-2">Use the following style for tables on smaller screens:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
table {
  overflow-x: auto;
  display: block;
}
            </code></pre>
            <p class="mt-2">Or wrap the table in a container:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;div style="overflow-x: auto;"&gt;
  &lt;table&gt;...&lt;/table&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Accessibility Tips</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Always use <code>&lt;th&gt;</code> for headers.</li>
                <li>Add <code>scope="col"</code> or <code>scope="row"</code> attributes to header cells.</li>
                <li>Use descriptive <code>&lt;caption&gt;</code> tags for screen readers.</li>
            </ul>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-table-tags.php" class="text-blue-600 hover:underline">Table Tags Explained →</a></p>
        </div>
    </article>
</main>
