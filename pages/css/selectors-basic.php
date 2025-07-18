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
                <a href="css-tutorials.php" class="text-blue-600 dark:text-blue-400 hover:underline">CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Basic Selectors</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Basic CSS Selectors</h1>
        <p class=" mb-4">
            CSS selectors are patterns used to target and apply styles to HTML elements. Basic selectors let you select elements by tag, class, ID, or universally.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Universal Selector (<code>*</code>)</h2>
            <p class=" mb-2">
                Applies styles to all elements on the page.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Element Selector</h2>
            <p class=" mb-2">
                Targets all elements of a specific type (e.g., all <code>&lt;p&gt;</code> or <code>&lt;h1&gt;</code> tags).
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p {
    font-size: 18px;
    color: #333;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Class Selector (<code>.</code>)</h2>
            <p class=" mb-2">
                Targets elements with a specific <code>class</code> attribute. Classes can be reused on multiple elements.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.highlight {
    background-color: yellow;
    font-weight: bold;
}
            </code></pre>
            <p class=" mt-2">
                HTML usage:
                <code>&lt;p class="highlight"&gt;Important Text&lt;/p&gt;</code>
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. ID Selector (<code>#</code>)</h2>
            <p class=" mb-2">
                Targets a single element with a specific <code>id</code>. IDs should be unique on each page.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
#header {
    background-color: #1e3a8a;
    color: white;
    padding: 10px;
}
            </code></pre>
            <p class=" mt-2">
                HTML usage:
                <code>&lt;div id="header"&gt;Site Header&lt;/div&gt;</code>
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Grouping Selector</h2>
            <p class=" mb-2">
                Apply the same styles to multiple elements by separating selectors with commas.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
h1, h2, h3 {
 font-family: 'Segoe UI', sans-serif;
 color: #1f2937;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mastering basic selectors is essential for applying styles effectively. Once you're comfortable with these, you can move on to more advanced combinators and pseudo-selectors.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/syntax') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Syntax Overview</a></div>
    <div><a href="<?= base_url('css/selectors-advanced') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Advanced Selectors →</a></div>
</div>
    </article>
</main>
