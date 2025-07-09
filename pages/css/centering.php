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
            <li class="text-gray-500">Centering Elements</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Centering Elements in CSS</h1>
        <p class=" mb-4">
            Centering content in CSS can be done in multiple ways depending on the context — whether you're centering text, inline elements, block elements, or entire containers.
        </p>

        <!-- Centering Text -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Centering Text</h2>
            <p class=" mb-2">Use <code>text-align: center;</code> on the parent container:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.center-text {
    text-align: center;
}
            </code></pre>
        </section>

        <!-- Horizontally Center a Block -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Horizontally Center a Block Element</h2>
            <p class=" mb-2">Use <code>margin: 0 auto;</code> and set a width:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.center-block {
    width: 300px;
    margin: 0 auto;
}
            </code></pre>
        </section>

        <!-- Flexbox Centering -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Centering with Flexbox</h2>
            <p class=" mb-2">Flexbox makes it easy to center content both horizontally and vertically:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.flex-center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 300px;
}
            </code></pre>
        </section>

        <!-- Grid Centering -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Centering with CSS Grid</h2>
            <p class=" mb-2">CSS Grid allows centering using <code>place-items</code>:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.grid-center {
    display: grid;
    place-items: center;
    height: 300px;
}
            </code></pre>
        </section>

        <!-- Absolute Positioning Center -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Center with Absolute Positioning</h2>
            <p class=" mb-2">Using transforms is another method to center an element:</p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
.absolute-center {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Centering elements in CSS depends on the context. Use <code>text-align</code> for inline content, <code>margin: auto</code> for block elements, and modern layout techniques like Flexbox or Grid for complete control.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="float-clear.php" class="text-blue-600 hover:underline">Float & Clear →</a></p>
        </div>
    </article>
</main>
