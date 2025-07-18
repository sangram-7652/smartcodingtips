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
            <li class="text-gray-500">Attributes</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Attributes</h1>
        <p class=" mb-4">
            Attributes in HTML provide additional information about elements. They are always included in the opening tag and usually come in name/value pairs like <code>name="value"</code>.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Syntax</h2>
            <p class=" mb-2">
                An attribute is written inside the start tag of an element. Here's an example:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;a href="https://example.com"&gt;Visit Example&lt;/a&gt;
            </code></pre>
            <p class=" mt-2">
                In this case, <code>href</code> is the attribute name and <code>"https://example.com"</code> is the value.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Common HTML Attributes</h2>
            <ul class="list-disc list-inside ">
                <li><strong>href</strong>: Specifies the URL in anchor tags</li>
                <li><strong>src</strong>: Specifies the path to an image</li>
                <li><strong>alt</strong>: Provides alternative text for images</li>
                <li><strong>title</strong>: Provides additional information when hovered</li>
                <li><strong>id</strong>: Assigns a unique identifier</li>
                <li><strong>class</strong>: Assigns a class name for CSS styling</li>
                <li><strong>style</strong>: Applies inline CSS styles</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Attribute Best Practices</h2>
            <ul class="list-disc list-inside ">
                <li>Always use quotes around attribute values.</li>
                <li>Use lowercase for attribute names (HTML is not case-sensitive, but consistency helps).</li>
                <li>Use meaningful <code>alt</code> text for images to improve accessibility.</li>
                <li>Avoid inline styles; use classes for styling.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Boolean Attributes</h2>
            <p class=" mb-2">
                Boolean attributes do not require a value. Their mere presence implies truth. Example:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto whitespace-pre-wrap dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;input type="checkbox" checked&gt;
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                HTML attributes add power and flexibility to your tags. By understanding and applying them correctly, you can make your pages more functional, accessible, and visually appealing.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('html/elements-tags') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Elements & Tags</a></div>
    <div><a href="<?= base_url('html/empty-vs-container') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Empty vs Container →</a></div>
</div>
    </article>
</main>
