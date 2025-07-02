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
                <a href="tailwind.php" class="text-blue-600 hover:underline">Tailwind CSS</a>
                <span class="mx-2">/</span>
            </li>
            <li class="text-gray-500">Grid Container and Columns</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Grid Container and Template Columns/Rows</h1>
        <p class="text-lg mb-4">
            Tailwind CSS makes working with CSS Grid easy by providing utility classes for defining grid containers, setting column/row templates, and creating responsive layouts.
        </p>

        <!-- Grid Container -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Creating a Grid Container</h2>
            <p class="text-lg mb-2">To start using grid, apply the <code>grid</code> class to your container:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid"&gt;
    &lt;div&gt;Item 1&lt;/div&gt;
    &lt;div&gt;Item 2&lt;/div&gt;
    &lt;div&gt;Item 3&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Grid Columns -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Defining Columns</h2>
            <p class="text-lg mb-2">
                Use <code>grid-cols-{n}</code> to set the number of equal-width columns. For example, <code>grid-cols-3</code> creates 3 columns:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid grid-cols-3 gap-4"&gt;
    &lt;div class="bg-gray-200 p-4"&gt;1&lt;/div&gt;
    &lt;div class="bg-gray-200 p-4"&gt;2&lt;/div&gt;
    &lt;div class="bg-gray-200 p-4"&gt;3&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Grid Rows -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Defining Rows</h2>
            <p class="text-lg mb-2">
                Use <code>grid-rows-{n}</code> to create a specific number of rows:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid grid-rows-2 grid-flow-col gap-4"&gt;
    &lt;div class="bg-blue-100 p-4"&gt;A&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;B&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;C&lt;/div&gt;
    &lt;div class="bg-blue-100 p-4"&gt;D&lt;/div&gt;
&lt;/div&gt;
            </pre>
            <p class="text-lg mt-2">
                Use <code>grid-flow-col</code> or <code>grid-flow-row</code> to control how items fill the grid.
            </p>
        </section>

        <!-- Auto Columns -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Auto-Columns and Auto-Rows</h2>
            <p class="text-lg mb-2">
                Use <code>auto-cols-</code> and <code>auto-rows-</code> to define default sizes:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto text-sm">
&lt;div class="grid grid-cols-3 auto-rows-fr gap-2"&gt;
    &lt;div class="bg-green-100 p-4"&gt;Item 1&lt;/div&gt;
    &lt;div class="bg-green-100 p-4"&gt;Item 2&lt;/div&gt;
    &lt;div class="bg-green-100 p-4"&gt;Item 3&lt;/div&gt;
&lt;/div&gt;
            </pre>
        </section>

        <!-- Conclusion -->
        <section>
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                The grid system in Tailwind makes it easy to build responsive layouts using intuitive utility classes for columns, rows, and flow control. Combine with gaps and breakpoints for full responsiveness.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="tailwind.php?page=tailwind/grid-gap" class="text-blue-600 hover:underline">Gap, Auto-Fill/Auto-Fit →</a></p>
        </div>
    </article>
</main>
