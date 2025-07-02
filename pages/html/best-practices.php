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
            <li class="text-gray-500">Best Practices</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">HTML Best Practices</h1>
        <p class="text-lg mb-4">
            Following best practices in HTML ensures your web pages are readable, maintainable, accessible, and optimized for performance and SEO. Here are some key recommendations:
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Use Semantic HTML</h2>
            <p class="text-lg mb-2">
                Use appropriate semantic tags like <code>&lt;header&gt;</code>, <code>&lt;nav&gt;</code>, <code>&lt;main&gt;</code>, <code>&lt;section&gt;</code>, and <code>&lt;footer&gt;</code> to give meaning to your content.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Keep Code Clean and Indented</h2>
            <p class="text-lg mb-2">
                Write well-structured code with consistent indentation to make it easier to read and maintain.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Always Use the Doctype Declaration</h2>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
&lt;!DOCTYPE html&gt;
            </code></pre>
            <p class="text-lg mt-2">
                This ensures the browser renders the page in standards mode.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Add Alt Text to Images</h2>
            <p class="text-lg mb-2">
                Always include descriptive <code>alt</code> attributes for images to improve accessibility and SEO.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Use External CSS and JavaScript</h2>
            <p class="text-lg mb-2">
                Keep styles and scripts in separate files to improve maintainability and loading performance.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Validate Your HTML</h2>
            <p class="text-lg mb-2">
                Use the W3C Validator to check for errors in your HTML code.
                <a href="https://validator.w3.org/" class="text-blue-600 hover:underline" target="_blank">W3C Validator</a>
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. Ensure Accessibility</h2>
            <p class="text-lg mb-2">
                Use proper heading order, label form elements, and include ARIA roles when needed to support screen readers.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">8. Use Meta Tags for SEO</h2>
            <p class="text-lg mb-2">
                Include meta descriptions, viewport tags, and other relevant meta tags to optimize your page for search engines and mobile devices.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="html-interview-questions.php" class="text-blue-600 hover:underline">HTML Interview Questions →</a></p>
        </div>
    </article>
</main>
