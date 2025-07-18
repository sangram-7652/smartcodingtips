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
            <li class="text-gray-500">Advanced Selectors</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Advanced CSS Selectors</h1>
        <p class=" mb-4">
            Advanced selectors give you more control when targeting elements. These include combinators, attribute selectors, pseudo-classes, and pseudo-elements.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Attribute Selectors</h2>
            <p class=" mb-2">
                Select elements based on the presence or value of attributes.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
input[type="text"] {
    border: 1px solid #ccc;
    padding: 5px;
}
            </code></pre>
            <p class=" mt-2">
                This rule targets all text input fields.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Pseudo-classes</h2>
            <p class=" mb-2">
                Pseudo-classes target elements based on their state or position.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
a:hover {
    color: red;
    text-decoration: underline;
}

li:first-child {
    font-weight: bold;
}
            </code></pre>
            <p class=" mt-2">
                Use pseudo-classes for interactivity and advanced targeting without JavaScript.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Pseudo-elements</h2>
            <p class=" mb-2">
                Target specific parts of an element, like the first line or add content before/after.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p::first-line {
    font-weight: bold;
}

p::before {
    content: "🔹 ";
    color: #1d4ed8;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Combinators</h2>
            <p class=" mb-2">
                Combine multiple selectors to define relationships between elements.
            </p>
            <ul class="list-disc list-inside ">
                <li><code>div p</code> — Descendant selector (any <code>&lt;p&gt;</code> inside <code>&lt;div&gt;</code>)</li>
                <li><code>div &gt; p</code> — Child selector (direct <code>&lt;p&gt;</code> children only)</li>
                <li><code>div + p</code> — Adjacent sibling (immediately following <code>&lt;p&gt;</code>)</li>
                <li><code>div ~ p</code> — General sibling (any <code>&lt;p&gt;</code> after a <code>&lt;div&gt;</code>)</li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Negation Pseudo-class</h2>
            <p class=" mb-2">
                Use <code>:not()</code> to exclude elements from a rule.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p:not(.highlight) {
    color: gray;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Advanced selectors give you fine-grained control over your styling. Mastering these will allow you to write cleaner and more powerful CSS without relying heavily on JavaScript or excessive class usage.
            </p>
        </section>

        <div class="mt-6 flex justify-between items-center text-sm font-semibold">
    <div><a href="<?= base_url('css/selectors-basic') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">← Previous: Basic Selectors</a></div>
    <div><a href="<?= base_url('css/combinators') ?>" class="text-blue-600 dark:text-blue-400 hover:underline">Next: Combinators →</a></div>
</div>
    </article>
</main>