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
            <li class="text-gray-500">CSS Combinators</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Combinators</h1>
        <p class="text-lg mb-4">
            CSS combinators are used to define relationships between selectors. They allow you to style elements based on their relationship in the HTML structure.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Descendant Selector (<code>space</code>)</h2>
            <p class="text-lg mb-2">
                Selects all elements that are inside another element.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
div p {
    color: green;
}
            </code></pre>
            <p class="text-lg mt-2">
                Styles all <code>&lt;p&gt;</code> elements that are inside any <code>&lt;div&gt;</code>, regardless of depth.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Child Selector (<code>&gt;</code>)</h2>
            <p class="text-lg mb-2">
                Selects all direct child elements.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
ul > li {
    list-style-type: square;
}
            </code></pre>
            <p class="text-lg mt-2">
                Only applies styles to <code>&lt;li&gt;</code> elements that are direct children of <code>&lt;ul&gt;</code>.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Adjacent Sibling Selector (<code>+</code>)</h2>
            <p class="text-lg mb-2">
                Selects the element that is immediately next to another element.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
h1 + p {
    font-style: italic;
}
            </code></pre>
            <p class="text-lg mt-2">
                Targets a <code>&lt;p&gt;</code> that comes right after an <code>&lt;h1&gt;</code> element.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. General Sibling Selector (<code>~</code>)</h2>
            <p class="text-lg mb-2">
                Selects all sibling elements that appear after a specified element.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
h1 ~ p {
    color: darkgray;
}
            </code></pre>
            <p class="text-lg mt-2">
                Applies to all <code>&lt;p&gt;</code> elements that follow an <code>&lt;h1&gt;</code> within the same parent.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Combinators help you write more specific and powerful CSS rules by defining relationships between elements. Use them to target elements based on their position or structure in the HTML document.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="css-colors.php" class="text-blue-600 hover:underline">CSS Colors →</a></p>
        </div>
    </article>
</main>
