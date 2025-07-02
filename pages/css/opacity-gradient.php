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
            <li class="text-gray-500">Opacity & Gradients</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Opacity & Gradients in CSS</h1>
        <p class="text-lg mb-4">
            CSS allows you to create visually engaging effects using opacity and gradients. These properties help in building layered, smooth, and attractive user interfaces.
        </p>

        <!-- Opacity Section -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Opacity</h2>
            <p class="text-lg mb-2">
                The <code>opacity</code> property controls the transparency of an element. It accepts values from <code>0</code> (fully transparent) to <code>1</code> (fully opaque).
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
img.transparent {
    opacity: 0.5;
}
            </code></pre>
            <p class="text-lg mt-2">
                Opacity affects the entire element, including content and background.
            </p>
        </section>

        <!-- Background Opacity Tip -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Tip: Only Background Transparency</h2>
            <p class="text-lg mb-2">
                Use <code>rgba()</code> or <code>hsla()</code> to set transparency for background only (not text).
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
div.bg {
    background-color: rgba(0, 0, 0, 0.3);
    color: white;
}
            </code></pre>
        </section>

        <!-- Gradients Section -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. CSS Gradients</h2>
            <p class="text-lg mb-2">
                Gradients are smooth transitions between two or more colors. CSS supports two main types:
            </p>

            <h3 class="text-xl font-semibold mt-4 mb-2">Linear Gradient</h3>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
div.linear {
    background: linear-gradient(to right, #4f46e5, #3b82f6);
}
            </code></pre>

            <h3 class="text-xl font-semibold mt-4 mb-2">Radial Gradient</h3>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
div.radial {
    background: radial-gradient(circle, #10b981, #065f46);
}
            </code></pre>

            <p class="text-lg mt-2">
                You can define direction, shape, color stops, and use transparency in gradients too.
            </p>
        </section>

        <!-- Gradient with Transparency -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Gradient with Transparency</h2>
            <p class="text-lg mb-2">
                Combine <code>rgba</code> in gradients for fade effects:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
div.fade {
    background: linear-gradient(to bottom, rgba(0, 0, 0, 0.8), transparent);
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Opacity and gradients are powerful for creating modern, stylish, and user-friendly designs. Use them to subtly guide attention, add depth, and create visual interest.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="borders-outline.php" class="text-blue-600 hover:underline">Borders & Outline →</a></p>
        </div>
    </article>
</main>
