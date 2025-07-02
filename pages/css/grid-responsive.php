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
            <li class="text-gray-500">Responsive Grids</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Responsive Grids in CSS</h1>
        <p class="text-lg mb-4">
            Responsive grids automatically adjust their layout based on screen size, allowing your content to remain readable and visually pleasing across all devices.
        </p>

        <!-- Auto-fit and Auto-fill -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Auto-fit vs Auto-fill</h2>
            <p class="text-lg mb-2">
                Use <code>auto-fit</code> or <code>auto-fill</code> with <code>minmax()</code> to create flexible grid columns:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    gap: 20px;
}
            </code></pre>
            <ul class="list-disc list-inside text-lg mt-2">
                <li><strong>auto-fit</strong>: collapses empty tracks</li>
                <li><strong>auto-fill</strong>: keeps the space reserved, even if empty</li>
            </ul>
        </section>

        <!-- Media Queries -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Using Media Queries</h2>
            <p class="text-lg mb-2">
                Combine Grid with media queries for more control:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.grid {
    display: grid;
    gap: 20px;
}

@media (min-width: 600px) {
    .grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (min-width: 900px) {
    .grid {
        grid-template-columns: repeat(3, 1fr);
    }
}
            </code></pre>
        </section>

        <!-- Responsive Card Grid -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Responsive Card Grid Example</h2>
            <p class="text-lg mb-2">This pattern is great for blog cards, product listings, etc.:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 1.5rem;
    padding: 1rem;
}
.card {
    background: #fff;
    padding: 1rem;
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
}
            </code></pre>
        </section>

        <!-- Best Practices -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Best Practices</h2>
            <ul class="list-disc list-inside text-lg">
                <li>Use <code>minmax()</code> for flexible column widths.</li>
                <li>Combine Grid with media queries for optimal layout control.</li>
                <li>Use <code>gap</code> instead of margins for cleaner spacing.</li>
            </ul>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Responsive grids are essential for modern web design. By using CSS Grid's dynamic features like <code>auto-fit</code>, <code>minmax</code>, and media queries, you can ensure your layout works across all screen sizes effortlessly.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="responsive-design-tips.php" class="text-blue-600 hover:underline">Responsive Design Tips →</a></p>
        </div>
    </article>
</main>
