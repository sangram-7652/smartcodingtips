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
            <li class="text-gray-500">Grid Basics</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Grid Basics</h1>
        <p class=" mb-4">
            CSS Grid is a layout system designed specifically for creating two-dimensional layouts. It allows you to arrange content into rows and columns with precision and flexibility.
        </p>

        <!-- Enabling Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Enabling Grid</h2>
            <p class=" mb-2">To start using grid, apply <code>display: grid;</code> to the container element:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    display: grid;
}
            </code></pre>
        </section>

        <!-- Defining Columns and Rows -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Defining Columns and Rows</h2>
            <p class=" mb-2">Use <code>grid-template-columns</code> and <code>grid-template-rows</code> to define structure:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    display: grid;
    grid-template-columns: 200px 1fr 100px;
    grid-template-rows: auto 1fr auto;
}
            </code></pre>
        </section>

        <!-- Grid Gap -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Adding Gaps</h2>
            <p class=" mb-2">Use <code>gap</code> (or <code>row-gap</code> and <code>column-gap</code>) to create spacing between grid items:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    display: grid;
    gap: 20px;
}
            </code></pre>
        </section>

        <!-- Placing Items -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Placing Items</h2>
            <p class=" mb-2">You can place items in specific grid areas using line numbers:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.item {
    grid-column: 1 / 3;  /* spans column 1 to 2 */
    grid-row: 2 / 4;     /* spans row 2 to 3 */
}
            </code></pre>
        </section>

        <!-- Repeat Syntax -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Repeat Syntax</h2>
            <p class=" mb-2">Use <code>repeat()</code> to simplify repeated values:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    grid-template-columns: repeat(3, 1fr);
}
            </code></pre>
        </section>

        <!-- Auto-fit vs Auto-fill -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. Auto-fit and Auto-fill</h2>
            <p class=" mb-2">Create responsive grids with flexible columns:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.container {
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                CSS Grid offers powerful tools for building responsive and complex layouts with ease. By learning the basics, you're ready to start creating structured, flexible grid designs for modern web interfaces.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="grid-auto-placement.php" class="text-blue-600 hover:underline">Grid Auto Placement →</a></p>
        </div>
    </article>
</main>
