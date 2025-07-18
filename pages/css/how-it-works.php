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
            <li class="text-gray-500">How CSS Works</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">How CSS Works</h1>
        <p class=" mb-4">
            CSS works by selecting HTML elements and applying styles to them. The browser reads the HTML, builds a structure called the DOM (Document Object Model), and then applies the styles from CSS to render the page visually.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. The Browser Rendering Process</h2>
            <p class=" mb-2">
                When a web page loads, the browser goes through several steps:
            </p>
            <ul class="list-disc list-inside ">
                <li>HTML is parsed to build the DOM (Document Object Model)</li>
                <li>CSS is parsed to build the CSSOM (CSS Object Model)</li>
                <li>Both models are combined into a render tree</li>
                <li>The render tree is used to paint elements on the screen</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. CSS Selectors and Rules</h2>
            <p class=" mb-2">
                CSS uses selectors to target HTML elements, and applies rules (properties and values) to style them.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p {
    color: red;
    font-size: 18px;
}
            </code></pre>
            <p class=" mt-2">
                In this example, all <code>&lt;p&gt;</code> elements will appear in red with font size 18px.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Cascading and Specificity</h2>
            <p class=" mb-2">
                The "Cascading" in CSS means that styles can come from multiple sources, and the most specific one takes priority. Style rules are applied based on:
            </p>
            <ul class="list-disc list-inside ">
                <li><strong>Importance</strong> (e.g., <code>!important</code>)</li>
                <li><strong>Specificity</strong> (e.g., ID > class > element)</li>
                <li><strong>Source order</strong> (the last rule overrides earlier ones)</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Inheritance</h2>
            <p class=" mb-2">
                Some CSS properties (like font and color) are inherited from parent elements by default. Others (like padding or border) are not.
            </p>
            <p class=" mt-2">
                You can control inheritance using the <code>inherit</code>, <code>initial</code>, or <code>unset</code> keywords.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Applying CSS to HTML</h2>
            <p class=" mb-2">
                CSS can be applied in three main ways:
            </p>
            <ul class="list-disc list-inside ">
                <li>Inline: directly within the HTML element</li>
                <li>Internal: inside a <code>&lt;style&gt;</code> tag in the <code>&lt;head&gt;</code></li>
                <li>External: linked via a separate <code>.css</code> file</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS works by defining rules that are applied to HTML elements through the browser’s rendering engine. Understanding how CSS is parsed, cascades, and is inherited is essential to mastering layout and design in web development.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/css-types') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Types of CSS</a></div>
    <div><a href="<?= base_url('css/setup') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Setup Your First File →</a></div>
</div>
    </article>
</main>
