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
            <li class="text-gray-500">Positioning</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">CSS Positioning</h1>
        <p class="text-lg mb-4">
            The <code>position</code> property in CSS allows you to control how elements are placed on the page. It works alongside properties like <code>top</code>, <code>right</code>, <code>bottom</code>, and <code>left</code> to precisely move elements.
        </p>

        <!-- Static -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. static (default)</h2>
            <p class="text-lg mb-2">
                The default position. Elements are placed in the normal document flow.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.element {
    position: static;
}
            </code></pre>
        </section>

        <!-- Relative -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. relative</h2>
            <p class="text-lg mb-2">
                The element is positioned relative to its normal position. You can nudge it using <code>top</code>, <code>left</code>, etc.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.box {
    position: relative;
    top: 10px;
    left: 20px;
}
            </code></pre>
        </section>

        <!-- Absolute -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. absolute</h2>
            <p class="text-lg mb-2">
                Positioned relative to the nearest positioned ancestor (not static). If none, it's relative to the viewport.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.container {
    position: relative;
}

.child {
    position: absolute;
    top: 10px;
    right: 10px;
}
            </code></pre>
        </section>

        <!-- Fixed -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. fixed</h2>
            <p class="text-lg mb-2">
                The element is positioned relative to the browser window. It stays in place during scroll.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.header {
    position: fixed;
    top: 0;
    width: 100%;
}
            </code></pre>
        </section>

        <!-- Sticky -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. sticky</h2>
            <p class="text-lg mb-2">
                The element toggles between relative and fixed, based on the user's scroll position.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.navbar {
    position: sticky;
    top: 0;
}
            </code></pre>
        </section>

        <!-- z-index -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">6. z-index</h2>
            <p class="text-lg mb-2">
                Controls the stacking order of overlapping elements. Higher values appear on top.
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.box {
    position: absolute;
    z-index: 10;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Understanding CSS positioning is essential for creating complex layouts. Combine positioning types with z-index and layout strategies like flexbox or grid for powerful control.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="float-clear.php" class="text-blue-600 hover:underline">Float & Clear →</a></p>
        </div>
    </article>
</main>
