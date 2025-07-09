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
            <li class="text-gray-500">What is CSS?</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">What is CSS?</h1>
        <p class=" mb-4">
            CSS stands for <strong>Cascading Style Sheets</strong>. It is a stylesheet language used to describe the presentation and layout of a document written in HTML or XML. CSS controls how elements appear on the page — including colors, fonts, spacing, and positioning.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Why Use CSS?</h2>
            <p class=" mb-2">
                CSS separates content from design, making it easier to manage and update the look of your website. It improves the user experience and allows consistent styling across multiple pages.
            </p>
            <ul class="list-disc list-inside ">
                <li>Enhances page aesthetics</li>
                <li>Improves code maintainability</li>
                <li>Reduces repetition using external stylesheets</li>
                <li>Supports responsive and adaptive design</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Types of CSS</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Inline CSS:</strong> Applied directly to an element using the <code>style</code> attribute.</li>
                <li><strong>Internal CSS:</strong> Written inside a <code>&lt;style&gt;</code> tag within the HTML <code>&lt;head&gt;</code>.</li>
                <li><strong>External CSS:</strong> Stored in a separate <code>.css</code> file and linked using the <code>&lt;link&gt;</code> tag.</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Basic Example</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
&lt;!DOCTYPE html&gt;
&lt;html&gt;
&lt;head&gt;
    &lt;link rel="stylesheet" href="styles.css"&gt;
&lt;/head&gt;
&lt;body&gt;
    &lt;h1&gt;Hello, World!&lt;/h1&gt;
&lt;/body&gt;
&lt;/html&gt;
            </code></pre>
            <p class=" mt-2">And the external CSS file <code>styles.css</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
h1 {
    color: blue;
    text-align: center;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS is a powerful tool for designing beautiful and responsive web pages. Learning CSS allows developers to create visually engaging and user-friendly websites.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-selectors.php" class="text-blue-600 hover:underline">CSS Selectors →</a></p>
        </div>
    </article>
</main>
