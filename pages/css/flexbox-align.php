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
            <li class="text-gray-500">Aligning Items</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Aligning Items in CSS (Flexbox & Grid)</h1>
        <p class=" mb-4">
            CSS provides various alignment properties to control how elements are positioned within containers. Flexbox and Grid offer powerful tools to align items both horizontally and vertically.
        </p>

        <!-- Aligning in Flexbox -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Aligning Items in Flexbox</h2>
            <p class=" mb-2">Flexbox uses <code>justify-content</code> and <code>align-items</code> to control alignment:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-container {
    display: flex;
    justify-content: center;   /* horizontal */
    align-items: center;       /* vertical */
}
            </code></pre>

            <ul class="list-disc list-inside  mt-2">
                <li><code>justify-content</code>: aligns items along the main axis (row or column).</li>
                <li><code>align-items</code>: aligns items along the cross axis.</li>
                <li><code>align-self</code>: overrides <code>align-items</code> for individual items.</li>
            </ul>
        </section>

        <!-- Aligning in Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Aligning Items in Grid</h2>
            <p class=" mb-2">CSS Grid uses similar properties to control alignment:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.grid-container {
    display: grid;
    justify-items: center;     /* aligns items horizontally */
    align-items: center;       /* aligns items vertically */
}
            </code></pre>

            <p class=" mt-2">You can also align the whole grid content:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.grid-container {
    justify-content: space-between;
    align-content: center;
}
            </code></pre>
        </section>

        <!-- align-self Example -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Aligning Individual Items</h2>
            <p class=" mb-2">Use <code>align-self</code> or <code>justify-self</code> for specific item control:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.item {
    align-self: flex-end;
    justify-self: start;
}
            </code></pre>
        </section>

        <!-- Visual Aid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Common Alignment Values</h2>
            <ul class="list-disc list-inside ">
                <li><code>flex-start</code> / <code>start</code></li>
                <li><code>flex-end</code> / <code>end</code></li>
                <li><code>center</code></li>
                <li><code>stretch</code></li>
                <li><code>space-between</code></li>
                <li><code>space-around</code></li>
                <li><code>space-evenly</code></li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Whether you're using Flexbox or Grid, mastering alignment lets you create flexible, responsive, and visually balanced layouts. Start with container-level properties, and fine-tune individual elements as needed.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="grid-auto-placement.php" class="text-blue-600 hover:underline">Grid Auto Placement →</a></p>
        </div>
    </article>
</main>
