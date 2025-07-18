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
            <li class="text-gray-500">Flexbox Layout</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Flexbox Layout in HTML</h1>
        <p class=" mb-4">
            Flexbox (Flexible Box Layout) is a powerful layout model in CSS that allows you to create complex layouts with simple and flexible alignment of items inside containers.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Flexbox Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;style&gt;
  .flex-container {
    display: flex;
    background-color: #f2f2f2;
    padding: 10px;
  }
  .flex-item {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    margin: 10px;
    text-align: center;
    flex: 1;
  }
&lt;/style&gt;

&lt;div class="flex-container"&gt;
  &lt;div class="flex-item"&gt;Item 1&lt;/div&gt;
  &lt;div class="flex-item"&gt;Item 2&lt;/div&gt;
  &lt;div class="flex-item"&gt;Item 3&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Flexbox Properties</h2>
            <ul class="list-disc list-inside  mb-2">
                <li><code>display: flex;</code> – Defines a flex container.</li>
                <li><code>flex-direction</code> – Sets direction: <code>row</code>, <code>column</code>, etc.</li>
                <li><code>justify-content</code> – Aligns items horizontally (e.g., <code>center</code>, <code>space-between</code>).</li>
                <li><code>align-items</code> – Aligns items vertically (e.g., <code>center</code>, <code>stretch</code>).</li>
                <li><code>flex-wrap</code> – Allows items to wrap onto multiple lines.</li>
                <li><code>flex</code> – Defines how a flex item grows or shrinks.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive Flexbox Layout</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;style&gt;
  .responsive-flex {
    display: flex;
    flex-wrap: wrap;
  }
  .responsive-flex .box {
    flex: 1 1 200px;
    margin: 10px;
    background-color: #2196F3;
    color: white;
    padding: 20px;
    text-align: center;
  }
&lt;/style&gt;

&lt;div class="responsive-flex"&gt;
  &lt;div class="box"&gt;Box 1&lt;/div&gt;
  &lt;div class="box"&gt;Box 2&lt;/div&gt;
  &lt;div class="box"&gt;Box 3&lt;/div&gt;
  &lt;div class="box"&gt;Box 4&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/columns-with-div') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Columns with Div</a></div>
    <div><a href="<?= base_url('html/grid-layout') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Grid Layout →</a></div>
</div>
    </article>
</main>
