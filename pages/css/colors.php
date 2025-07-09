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
            <li class="text-gray-500">Text & Background Colors</li>
        </ol>
    </nav>

    <!-- Main Content -->
    <article>
        <h1 class="text-3xl font-bold mb-4">Text & Background Colors in CSS</h1>
        <p class=" mb-4">
            Colors are a vital part of web design. CSS allows you to change both text and background colors using various formats like names, HEX, RGB, or HSL.
        </p>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">1. Text Color</h2>
            <p class=" mb-2">
                Use the <code>color</code> property to change the text color.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
p {
    color: blue;
}

h1 {
    color: #1e40af;
}

a {
    color: rgb(255, 99, 71);
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">2. Background Color</h2>
            <p class=" mb-2">
                Use the <code>background-color</code> property to set an element's background.
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
body {
    background-color: #f9fafb;
}

div.highlight {
    background-color: yellow;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">3. Color Value Types</h2>
            <ul class="list-disc list-inside ">
                <li><strong>Color names</strong>: <code>red</code>, <code>blue</code>, <code>green</code></li>
                <li><strong>HEX values</strong>: <code>#ff0000</code>, <code>#1e90ff</code></li>
                <li><strong>RGB values</strong>: <code>rgb(255, 0, 0)</code></li>
                <li><strong>RGBA</strong>: Adds transparency (alpha): <code>rgba(0, 0, 0, 0.5)</code></li>
                <li><strong>HSL values</strong>: <code>hsl(120, 100%, 50%)</code></li>
            </ul>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">4. Applying to Specific Elements</h2>
            <p class=" mb-2">
                You can use classes and IDs to apply colors to specific elements:
            </p>
            <pre class="bg-gray-100 p-4 rounded dark:bg-gray-900 dark:text-white"><code class="text-sm">
#warning {
    background-color: orange;
    color: white;
}

.note {
    background-color: #e0f7fa;
    color: #006064;
}
            </code></pre>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">5. Contrast & Accessibility</h2>
            <p class=" mb-2">
                Make sure there's enough contrast between text and background. Use online tools like the WCAG Contrast Checker to ensure your site is accessible.
            </p>
        </section>

        <section class="mb-6">
            <h2 class="text-2xl font-semibold mb-2">Conclusion</h2>
            <p class="">
                Using text and background colors strategically can enhance readability and design appeal. Practice using different formats to understand which fits your project best.
            </p>
        </section>

        <div class="mt-4">
            <p class=" font-semibold">Next: <a href="css-box-model.php" class="text-blue-600 hover:underline">CSS Box Model →</a></p>
        </div>
    </article>
</main>
