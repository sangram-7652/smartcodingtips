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
                <a href="css-tutorials.php" class="text-blue-600 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Types of CSS</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Types of CSS</h1>
        <p class=" mb-4">
            CSS can be applied to HTML in three main ways: Inline, Internal, and External. Each method has its own use cases, advantages, and limitations.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Inline CSS</h2>
            <p class=" mb-2">
                Inline CSS is used to apply a unique style directly to a single HTML element using the <code>style</code> attribute.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;p style="color: red; font-size: 18px;"&gt;This is a red paragraph.&lt;/p&gt;
            </code></pre>
            <p class=" mt-2">
                <strong>Use Case:</strong> Quick, one-time styling for specific elements.<br>
                <strong>Drawback:</strong> Difficult to maintain and not reusable.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Internal CSS</h2>
            <p class=" mb-2">
                Internal CSS is written inside a <code>&lt;style&gt;</code> tag within the <code>&lt;head&gt;</code> section of the HTML document.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;head&gt;
    &lt;style&gt;
        p {
            color: green;
            font-size: 20px;
        }
    &lt;/style&gt;
&lt;/head&gt;
            </code></pre>
            <p class=" mt-2">
                <strong>Use Case:</strong> When styling a single HTML document.<br>
                <strong>Drawback:</strong> Not reusable across multiple pages.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. External CSS</h2>
            <p class=" mb-2">
                External CSS is written in a separate file with a <code>.css</code> extension and linked using the <code>&lt;link&gt;</code> tag.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;head&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
            </code></pre>
            <p class=" mt-2">
                The <code>styles.css</code> file:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p {
    color: blue;
    font-size: 22px;
}
            </code></pre>
            <p class=" mt-2">
                <strong>Use Case:</strong> Ideal for styling multiple pages consistently.<br>
                <strong>Advantage:</strong> Cleaner code and easy maintenance.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding the types of CSS helps you choose the right method for different scenarios. While inline and internal CSS are useful for small-scale or specific tasks, external CSS is best for larger, maintainable projects.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-syntax.php" class="text-blue-600 hover:underline">CSS Syntax →</a></p>
        </div>
    </article>
</main>
