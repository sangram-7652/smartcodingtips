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
            <li class="text-gray-500">Layout Patterns</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Common CSS Layout Patterns</h1>
        <p class="text-lg mb-4">
            CSS offers a variety of layout techniques to build common UI patterns. These include navigation bars, sidebars, grids, and more using Flexbox and Grid.
        </p>

        <!-- 1. Centered Content -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Centered Content</h2>
            <p class="text-lg mb-2">Vertically and horizontally center elements using Flexbox:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.center {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}
            </code></pre>
        </section>

        <!-- 2. Holy Grail Layout -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Holy Grail Layout</h2>
            <p class="text-lg mb-2">A classic layout with header, footer, main content, and two sidebars:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.container {
    display: grid;
    grid-template-areas:
        "header header header"
        "nav    main   aside"
        "footer footer footer";
    grid-template-columns: 200px 1fr 200px;
    grid-template-rows: auto 1fr auto;
}
            </code></pre>
        </section>

        <!-- 3. Sidebar Layout -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Sidebar Layout</h2>
            <p class="text-lg mb-2">Two-column layout with sidebar and content:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.wrapper {
    display: flex;
}

.sidebar {
    width: 250px;
}

.content {
    flex: 1;
}
            </code></pre>
        </section>

        <!-- 4. Card Grid Layout -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Card Grid Layout</h2>
            <p class="text-lg mb-2">Responsive card grid using CSS Grid:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}
            </code></pre>
        </section>

        <!-- 5. Sticky Header/Footer -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Sticky Header/Footer</h2>
            <p class="text-lg mb-2">Keep elements fixed to the top or bottom of the viewport:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.header {
    position: sticky;
    top: 0;
    background: white;
    z-index: 1000;
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                These layout patterns form the foundation for most modern web interfaces. By combining Flexbox, Grid, and positioning, you can create responsive, accessible, and maintainable designs with ease.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="responsive-design.php" class="text-blue-600 hover:underline">Responsive Design Tips →</a></p>
        </div>
    </article>
</main>
