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
            <li class="text-gray-500">Z-index & Layering</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Z-index & Layering in CSS</h1>
        <p class="text-lg mb-4">
            The <code>z-index</code> property in CSS controls the vertical stacking order of elements. It is especially useful when elements overlap and you want to control which one appears on top.
        </p>

        <!-- How z-index Works -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. How Z-index Works</h2>
            <p class="text-lg mb-2">
                The <code>z-index</code> only works on positioned elements (<code>position: relative</code>, <code>absolute</code>, <code>fixed</code>, or <code>sticky</code>). Higher values appear above lower values.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.box1 {
    position: absolute;
    z-index: 1;
}

.box2 {
    position: absolute;
    z-index: 5;
}
            </code></pre>
            <p class="text-lg mt-2">
                In this example, <code>.box2</code> will appear above <code>.box1</code>.
            </p>
        </section>

        <!-- Default Stacking Context -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Default Stacking Context</h2>
            <p class="text-lg mb-2">
                Elements are stacked based on their order in the HTML by default. Later elements appear above earlier ones if <code>z-index</code> is not used.
            </p>
        </section>

        <!-- Creating a New Stacking Context -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Creating a New Stacking Context</h2>
            <p class="text-lg mb-2">
                Some properties (like <code>position</code> + <code>z-index</code>, <code>opacity</code> &lt; 1, <code>transform</code>, <code>filter</code>, etc.) create a new stacking context. This confines z-index comparisons within that context.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.container {
    position: relative;
    z-index: 10;
}

.child {
    position: absolute;
    z-index: 999;
    /* Still below other containers with higher z-index */
}
            </code></pre>
        </section>

        <!-- Negative Z-index -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Negative Z-index</h2>
            <p class="text-lg mb-2">
                You can assign negative z-index values to send elements behind others — even behind the page's background in some cases.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.behind {
    position: absolute;
    z-index: -1;
}
            </code></pre>
        </section>

        <!-- Practical Tips -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Practical Tips</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use <code>z-index</code> sparingly to avoid unexpected stacking issues.</li>
                <li>Set <code>position</code> whenever using <code>z-index</code>.</li>
                <li>Use layers (e.g., modals, dropdowns) with high <code>z-index</code> like 9999+ for safety.</li>
                <li>Understand stacking context to debug layering problems.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                The <code>z-index</code> property gives you control over which elements appear in front or behind. When combined with positioning and stacking contexts, it becomes a powerful tool for layered designs.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="float-clear.php" class="text-blue-600 hover:underline">Float & Clear →</a></p>
        </div>
    </article>
</main>
