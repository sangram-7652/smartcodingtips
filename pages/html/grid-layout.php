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
            <li class="text-gray-500">Grid Layout</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Grid Layout in HTML & CSS</h1>
        <p class="text-lg mb-4">
            CSS Grid Layout is a powerful system for creating two-dimensional layouts on the web. It allows you to design web pages using rows and columns with precise control.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Grid Example</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;style&gt;
  .grid-container {
    display: grid;
    grid-template-columns: auto auto auto;
    gap: 10px;
    background-color: #f2f2f2;
    padding: 10px;
  }

  .grid-item {
    background-color: #2196F3;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
  }
&lt;/style&gt;

&lt;div class="grid-container"&gt;
  &lt;div class="grid-item"&gt;1&lt;/div&gt;
  &lt;div class="grid-item"&gt;2&lt;/div&gt;
  &lt;div class="grid-item"&gt;3&lt;/div&gt;
  &lt;div class="grid-item"&gt;4&lt;/div&gt;
  &lt;div class="grid-item"&gt;5&lt;/div&gt;
  &lt;div class="grid-item"&gt;6&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common Grid Properties</h2>
            <ul class="list-disc list-inside text-lg">
                <li><code>display: grid;</code> – Enables grid layout on the container.</li>
                <li><code>grid-template-columns</code> – Defines the number and size of columns.</li>
                <li><code>grid-template-rows</code> – Defines the number and size of rows.</li>
                <li><code>gap</code> – Sets spacing between rows and columns.</li>
                <li><code>grid-column</code> / <code>grid-row</code> – Specifies how an item spans multiple columns or rows.</li>
                <li><code>justify-items</code> / <code>align-items</code> – Controls item alignment.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Responsive Grid</h2>
            <p class="mb-2">Using <code>repeat()</code> and <code>minmax()</code>, you can create responsive grids easily:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;style&gt;
  .responsive-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 10px;
  }

  .responsive-grid .item {
    background-color: #4CAF50;
    color: white;
    padding: 20px;
    text-align: center;
    border-radius: 8px;
  }
&lt;/style&gt;

&lt;div class="responsive-grid"&gt;
  &lt;div class="item"&gt;A&lt;/div&gt;
  &lt;div class="item"&gt;B&lt;/div&gt;
  &lt;div class="item"&gt;C&lt;/div&gt;
  &lt;div class="item"&gt;D&lt;/div&gt;
&lt;/div&gt;
            </code></pre>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-media-queries.php" class="text-blue-600 hover:underline">HTML Media Queries →</a></p>
        </div>
    </article>
</main>
