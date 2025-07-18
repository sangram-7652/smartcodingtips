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
            <li class="text-gray-500">CSS Syntax</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Syntax Overview</h1>
        <p class=" mb-4">
            CSS syntax defines how you write styles to apply them to HTML elements. A CSS rule is made up of a selector and a declaration block that contains one or more property-value pairs.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Basic Structure</h2>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
selector {
    property: value;
}
            </code></pre>
            <p class=" mt-2">
                <strong>Selector:</strong> Targets the HTML element(s) you want to style.<br>
                <strong>Property:</strong> The aspect you want to change (like color, font-size, etc.).<br>
                <strong>Value:</strong> The setting for the property.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Example</h2>
            <p class=" mb-2">
                Here’s a simple rule that styles all paragraphs:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p {
    color: blue;
    font-size: 16px;
}
            </code></pre>
            <p class=" mt-2">
                This rule turns all <code>&lt;p&gt;</code> text blue and sets the font size to 16 pixels.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Multiple Properties</h2>
            <p class=" mb-2">
                You can apply multiple properties in one rule by separating them with semicolons:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
h1 {
    color: #1e3a8a;
    text-align: center;
    margin-top: 20px;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Comments in CSS</h2>
            <p class=" mb-2">
                Use comments to explain your code. Comments are ignored by the browser.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
/* This is a CSS comment */
p {
    color: gray;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Case Sensitivity</h2>
            <p class=" mb-2">
                CSS is not case-sensitive for property names or values, but HTML element names and class/ID names are case-sensitive in some contexts (especially in XML or XHTML).
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Understanding CSS syntax is the first step to mastering web design. Write clear, clean rules using the correct structure, and you'll be ready to dive into selectors, layouts, and responsive design.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/setup') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Setup Your First File</a></div>
    <div><a href="<?= base_url('css/selectors-basic') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Basic Selectors →</a></div>
</div>
    </article>
</main>
