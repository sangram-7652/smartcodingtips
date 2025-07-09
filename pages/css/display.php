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
            <li class="text-gray-500">Display Types</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Display Types</h1>
        <p class=" mb-4">
            The <code>display</code> property in CSS defines how an element is displayed in the document layout. It is one of the most important properties for controlling layout behavior.
        </p>

        <!-- Block -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. block</h2>
            <p class=" mb-2">
                Elements with <code>display: block;</code> take up the full width available and start on a new line.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
div {
    display: block;
}
            </code></pre>
            <p class=" mt-2">
                Examples: <code>&lt;div&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;h1&gt;</code>
            </p>
        </section>

        <!-- Inline -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. inline</h2>
            <p class=" mb-2">
                <code>inline</code> elements only take as much width as necessary and do not start on a new line.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
span {
    display: inline;
}
            </code></pre>
            <p class=" mt-2">
                Examples: <code>&lt;span&gt;</code>, <code>&lt;a&gt;</code>, <code>&lt;strong&gt;</code>
            </p>
        </section>

        <!-- inline-block -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. inline-block</h2>
            <p class=" mb-2">
                Combines characteristics of both block and inline. It flows inline but respects width and height.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.button {
    display: inline-block;
    padding: 10px 20px;
}
            </code></pre>
        </section>

        <!-- none -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. none</h2>
            <p class=" mb-2">
                Hides the element completely from the layout (no space is reserved).
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.modal {
    display: none;
}
            </code></pre>
        </section>

        <!-- flex -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. flex</h2>
            <p class=" mb-2">
                Enables flexbox layout, allowing responsive alignment and spacing.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    display: flex;
    justify-content: center;
    align-items: center;
}
            </code></pre>
            <p class=" mt-2">
                Flexbox is powerful for creating responsive row/column layouts.
            </p>
        </section>

        <!-- grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. grid</h2>
            <p class=" mb-2">
                Applies CSS Grid layout, useful for complex two-dimensional layouts.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.grid-container {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}
            </code></pre>
        </section>

        <!-- table -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">7. table & table-cell</h2>
            <p class=" mb-2">
                Mimics the behavior of HTML tables. Useful when aligning content like a table.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.table {
    display: table;
}
.cell {
    display: table-cell;
    vertical-align: middle;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Mastering the <code>display</code> property helps you control layout and spacing. Choosing the right display type is essential for responsive, structured designs.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-positioning.php" class="text-blue-600 hover:underline">CSS Positioning →</a></p>
        </div>
    </article>
</main>
