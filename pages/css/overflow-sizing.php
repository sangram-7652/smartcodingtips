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
            <li class="text-gray-500">Overflow & Box Sizing</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Overflow & Box Sizing in CSS</h1>
        <p class="text-lg mb-4">
            Understanding how content behaves inside containers is key for layout control. <strong>Overflow</strong> handles what happens when content exceeds the container size, and <strong>box-sizing</strong> controls how dimensions are calculated.
        </p>

        <!-- Overflow -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. CSS Overflow Property</h2>
            <p class="text-lg mb-2">
                The <code>overflow</code> property controls what happens when content is too big for its container.
            </p>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>visible</code> – default; content spills out.</li>
                <li><code>hidden</code> – content is clipped.</li>
                <li><code>scroll</code> – adds scrollbars always.</li>
                <li><code>auto</code> – adds scrollbars only when needed.</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.container {
    width: 300px;
    height: 100px;
    overflow: auto;
}
            </code></pre>
        </section>

        <!-- Overflow X and Y -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. overflow-x & overflow-y</h2>
            <p class="text-lg mb-2">
                You can control horizontal and vertical overflow separately:
            </p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
.box {
    overflow-x: scroll;
    overflow-y: hidden;
}
            </code></pre>
        </section>

        <!-- Box Sizing -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. CSS box-sizing Property</h2>
            <p class="text-lg mb-2">
                The <code>box-sizing</code> property controls how the total width and height of an element is calculated.
            </p>
            <ul class="list-disc list-inside text-lg mb-2">
                <li><code>content-box</code> – default. Width/height includes only content (padding and border are added).</li>
                <li><code>border-box</code> – includes padding and border in the width/height.</li>
            </ul>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
/* Common practice */
* {
    box-sizing: border-box;
}
            </code></pre>
            <p class="text-lg mt-2">
                This makes layout sizing predictable and avoids unwanted overflow.
            </p>
        </section>

        <!-- Example Comparison -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Example Comparison</h2>
            <p class="text-lg mb-2">Both elements have <code>width: 200px</code> and <code>padding: 20px</code>:</p>
            <pre class="bg-gray-100 p-4 rounded overflow-x-auto"><code class="text-sm">
/* content-box (default) */
.box1 {
    width: 200px;
    padding: 20px;
    box-sizing: content-box; /* Total width = 240px */
}

/* border-box */
.box2 {
    width: 200px;
    padding: 20px;
    box-sizing: border-box; /* Total width = 200px */
}
            </code></pre>
        </section>

        <!-- Conclusion -->
        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="text-lg">
                Use <code>overflow</code> to control how excess content behaves, and <code>box-sizing: border-box</code> for reliable layouts. These two properties are essential for building robust and flexible designs.
            </p>
        </section>

        <div class="mt-4">
            <p class="text-lg font-semibold">Next: <a href="css-display.php" class="text-blue-600 hover:underline">CSS Display Property →</a></p>
        </div>
    </article>
</main>
